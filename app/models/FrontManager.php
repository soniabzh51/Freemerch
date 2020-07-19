<?php

namespace Project\models;

class FrontManager extends Manager{

    public function viewFront(){

        //Appel de la bdd par la fonction dbConnect()
        $bdd = $this->dbConnect();  
        // Le modèle prépare la requête serveur
        $req = $bdd->prepare('SELECT title, extract, image FROM articles ORDER BY id DESC LIMIT 4');
        $req->execute(array());
        return $req;
    }

    // function register_user : add user
    public function register_user($pseudo,$email,$password){
        $bdd = $this->dbConnect();
        $register = $bdd->prepare('INSERT INTO users(pseudo, email, password) VALUES (:pseudo, :email, :password)');
        $register->execute ([
            "pseudo" => htmlentities($pseudo),
            "email" => htmlentities($email),
            "password" => password_hash($password, PASSWORD_DEFAULT) 
        ]);
        return $register;
    }

    //  function pseudo : check if another user has the same pseudo 
    public function pseudo_user($pseudo){
        $bdd = $this->dbConnect();
        $pseudo_user = $bdd->prepare('SELECT COUNT(*) FROM users WHERE pseudo = ?');
        $pseudo_user->execute([$pseudo]);
        $pseudo_user= $pseudo_user->fetch()[0]; 
        
        return $pseudo_user;
    }

    // function login_user: user connection
    public function login_user($pseudo,$password){
        $bdd = $this->dbConnect();
        $login = $bdd->prepare('SELECT id, password FROM users WHERE pseudo = ?');
        $login->execute([$pseudo]);
        $login = $login->fetch();
        return $login;
    }

    // function infos_user : 
    public function infos_user(){
        $bdd = $this->dbConnect();
        $infos = $bdd->prepare('SELECT id, email, pseudo, password FROM users WHERE id = ?');
        $infos ->execute([$_SESSION['users']]);
        $infos = $infos->fetch();
        return $infos;
    }

    function article(){
        $bdd = $this->dbConnect();
        $id = (int)$_GET['id'];
        $article = $bdd->prepare('SELECT id, title, extract, content, image, created_at FROM articles WHERE id=? ');
        $article->execute([$id]);
        $article = $article->fetch();
    
        if(empty($article)){
            header('Location: index.php');
        }else
       
        return $article;
    
    }
    

    // public function articles(){
    //     $bdd = $this->dbConnect();
    //     // $articles = $bdd->prepare('SELECT articles.*, admin.pseudo FROM articles INNER JOIN admins ON articles.admin_id = admin.id');
    //     // $articles = $bdd->prepare("SELECT id, title, extract, content, image, created_at FROM articles ORDER BY created_date DESC LIMIT 4");
    //     $articles = $bdd->query("SELECT id, title, extract, content, image, created_at FROM articles ORDER BY created_date DESC LIMIT 4");
    //     // $articles->execute();
    //     $articles = $articles->fetchAll();
    //     return $articles;
    // }

    public function getArticleNews(){
        $bdd = $this->dbConnect();
        // $id = (int)$_GET['id'];
        // $articleNews = $bdd->query("SELECT id, title, extract, image, created_at FROM articles ORDER BY created_at ASC LIMIT 4");
        $articleNews = $bdd->query("SELECT articles.*, admins.pseudo FROM articles INNER JOIN admins ON articles.admin_id = admins.id ORDER BY created_at DESC LIMIT 4");
        // $articleNews->execute([$id]);
        $articleNews = $articleNews->fetchAll();
        return $articleNews;
    }



















    // function display_article : 
    // public function display_article(){
    //    $bdd = $this->dbConnect();
    //    $displayArticle = $bdd->prepare('SELECT articles.*, admin.pseudo FROM articles INNER JOIN admins ON articles.admin_id = admin_id');
    //    $displayArticle->execute();
    //    $displayArticle = $displayArticle->fetchAll();
    //    return $displayArticle;
    // }
}