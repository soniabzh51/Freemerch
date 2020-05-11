<?php

namespace Project\controllers;
class ControllerFront
{
    function home(){

        // Appel du modèle que l'on stocke dans une variable ($homeFront)

        $homeFront = new \Project\models\FrontManager();
        
        /* 
        Appel de la méthode du modèle viewFront
        La variable $accueil stocke les données récupérées dans la
        méthode du modèle (bdd). Cette variable sera ensuite injectée
        dans la view pour afficher les données
        */
        
        $accueil = $homeFront->viewFront();
        require 'app/views/front/home.php';
    }
    function homeFront(){
        require 'app/views/front/home.php';
    }
    function aboutFront(){
        require 'app/views/front/about.php';
    }
    function visuelMerchFront(){
        require 'app/views/front/visuelMerch.php';
    }
    function vitrineFront(){
        require 'app/views/front/vitrine.php';
    }
    function bookmerchandisingFront(){
        require 'app/views/front/bookmerchandising.php';
    }
    function trainingFront(){
        require 'app/views/front/training.php';
    }
    function portfolioFront(){
        require 'app/views/front/portfolio.php';
    }
    function blogFront(){
        require 'app/views/front/blog.php';
    }
    function articleFront(){
        require 'app/views/front/article.php';
    }
    function compteFront(){
        require 'app/views/front/compte.php';
    }
    function contacFront(){
        require 'app/views/front/contact.php';
    }
    function erreur404Front(){
        require 'app/views/front/erreur404.php';
    }
    function rgpdFront(){
        require 'app/views/front/rgpd.php';
    }
    function mentionsLegalesFront(){
        require 'app/views/front/mentionsLegales.php';
    }
    function sitemapFront(){
        require 'app/views/front/sitemap.php';
    }

    function register(){
       
        extract($_POST);
        $validation = true;
        $errors = [];

        if(empty($pseudo) || empty($email) || empty($emailconf) || empty($password) || empty($passwordconf)){
            $validation = false;
            $errors[] = 'Tous les champs sont obligatoires !';
        }
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $validation = false;
            $errors = "L'adresse e-mail n'est pas valide !";
        }
        if($emailconf != $email){
            $validation = false;
            $errors = "L'adresse e-mail de confirmation est incorrecte !";
        }
        if($passwordconf != $password){
            $validation = false;
            $errors = "Le mot de passe de confirmation est incorrect !";
        }
        if ($pseudo = $addPseudo){
            $addPseudo = new \Project\models\FrontManager(pseudo_check($addPseudo));
            $validation = false;
            $errors[] = "Ce pseudo est déjà pris !";
        }
        if($validation){
            $register = new \Project\models\FrontManager(addUser($pseudo,$email,$password));
            require 'app/views/front/compte.php';
            unset($_POST['pseudo']);
            unset($_POST['email']);
            unset($_POST['emailconf']);
        }
        return $errors;
    }

    function login(){
        global $bdd;
    
        extract($_POST);
    
        $error = "Ces identifiants ne correspondent pas à nos enregistrements !";
    
        $login = $bdd->prepare('SELECT id, password FROM users WHERE pseudo = ?');
        $login->execute([$pseudo]);
    
        $login = $login->fetch();
        if(password_verify($password, $login['password'])){
            $_SESSION['user'] = $login['id'];
            header("Location: compte.php");
        }else{
            return $error;
        }
    }
            // Verif mdp formulaire avec mdp base de données
            // si ok, on ouvre une session php pour se connecter au compte
        
    
    
    function logout(){
        unset($_SESSION['user']);
        session_destroy();
        header('Location: blog.php');
    }
    
    // function infos(){
    //     global $bdd;
    
    //     $infos = $bdd->prepare('SELECT email, pseudo FROM users WHERE id = ?');
    //     $infos->execute([$_SESSION["user"]]);
    
    //     $infos = $infos->fetch();
        
    //     return $infos;
    // }

    function post_comment(){
        if(isset($_SESSION['user'])){
            global $bdd;
            extract($_POST);
            $error = '';
    
            if(!empty($commentaire)){
                
                $id_article = (int)$_GET["id"];
                $comment = $bdd->prepare('INSERT INTO comments(user_id, article_id, content) VALUES (:user_id, :article_id, :content) ');
                $comment->execute([
                    "user_id"=> $_SESSION['user'],
                    "article_id" => $id_article,
                    "comments" => nl2br(htmlentities($commentaire)),
                ]);
                header("Location: article.php?id=". $id_article);
            }else{
                $error .= 'Vous devez écrire du texte';
            }
            return $error;
        }
    }    



}