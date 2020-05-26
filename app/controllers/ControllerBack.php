<?php

namespace Project\controllers;
class ControllerBack
{
    function homeAdmin(){

        // Appel du modèle que l'on stocke dans une variable ($homeFront)

        $homeAdminBack = new \Project\models\BackManager();
        
        /* 
        Appel de la méthode du modèle viewFront
        La variable $accueil stocke les données récupérées dans la
        méthode du modèle (bdd). Cette variable sera ensuite injectée
        dans la view pour afficher les données
        */
        
        $accueilAdmin = $homeAdminBack->viewBack();

        require 'app/views/back/homeAdmin.php';
    }
    function homeAdminBack(){
        require 'app/views/back/homeAdmin.php';
    }
    function postsBack(){
        require 'app/views/back/posts.php';
    }
    function usersManagementBack(){
        require 'app/views/back/usersManagement.php';
    }
    function articleAdminBack(){
        require 'app/views/back/articleAdmin.php';
    }
    // login admin
    function loginUser(){
        extract($_POST);
        $error = "Ces identifiants ne correspondent pas à nos enregistrements !";
    
        $loginUser = new \Project\models\FrontManager();
        $login->execute([$pseudo]);
    
        $login = $login->fetch();
        if(password_verify($password, $login['password'])){
            $_SESSION['user'] = $login['id'];
            header("Location: blog.php");
        }else{
            return $error;
        }
    }
            // Verif mdp formulaire avec mdp base de données
            // si ok, on ouvre une session php pour se connecter au compte
    
    // logout admin
    function logout(){
        unset($_SESSION['admin']); /********  A FINIR  *****************/ 
        session_destroy();
       
    }
    
    // post article admin
    function post_article(){
        global $bdd;
    
        extract($_POST);
        $validation = true;
        $errors = [];
    
        if(empty($titre) || empty($contenu)){
            $validation = false;
            $errors[] = 'Tous les champs sont obligatoires !'; 
        }
        if(!isset($_FILES["file"]) || $_FILES['file']['error'] > 0){
            $validation = false;
            $errors[] = "L'image est obligatoire !";
        }
        if($validation){
            $image = basename($_FILES['file']['name']);
            move_uploaded_file($_FILES['file']['tmp_name'], 'app/public/images/' .$image);
        
            $post = $bdd->prepare("INSERT INTO articles(title, extract, content, image) VALUES(:title, :extract, :content, :image)");
            $post->execute([
                "title" => htmlentities($titre),
                "extract" => substr(htmlentities($contenu), 0,150 ),
                "content" => htmlentities($contenu),
                "image" => htmlentities($image)
            ]);
            unset($_POST['titre']);
            unset($_POST['contenu']);
        
            return $errors;
        }
    }

    // select chosen elements from  ordered articles 
    function posts(){
        global $bdd;
    
        $posts = $bdd->query("SELECT id, title FROM articles ORDER BY id DESC");
        $posts = $posts->fetchAll();
    
        return $posts;
    }

    function delete(){
        global $bdd;
    
        $id = (int)$_GET['id'];
    
        $image = $bdd->prepare("SELECT image FROM articles WHERE id = ?");
        $image->execute(["$id"]);
        $image = $image->fetch()['image'];
    
        unlink("../img/" . $image);
    
        $delete = $bdd->prepare("DELETE FROM articles WHERE id = ?");
    
        $delete->execute([$id]);
    }
    
    function post(){
        global $bdd;
        $id = (int)$_GET["id"];
    
        $post = $bdd->prepare("SELECT title, content FROM articles WHERE id = ?");
        $post->execute([$id]);
        $post = $post->fetch();
    
        return $post;
    }
     
    /*   PEUT ETRE DOUBLON AVEC FONCTION POST_ARTICLE !
    function update(){
        global $bdd;
        $errors = '';
        extract($_POST);

        $id = (int)$_GET["id"];
        if(!empty($titre) AND !empty($contenu)){
            $update = $bdd->prepare("UPDATE articles SET title = :title, extract = :extract, content = :content WHERE id = :id");
            $update->execute([
                "title" => htmlentities($titre),
                "extract" => substr(htmlentities($contenu), 0,150),
                "content" => nl2br(htmlentities($contenu)),
                "id" => $id
            ]);
        }else{
            $errors .= "Les champs ne doivent pas être vide !";
        }
        return $errors;
    }
    */
    

}