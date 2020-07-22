<?php

namespace Project\models;

class BackManager extends Manager{

    public function viewBack(){

        //Appel de la bdd par la fonction dbConnect()
        $bdd = $this->dbConnect();  
        // Le modèle prépare la requête serveur
        $req = $bdd->prepare('Methode sql');
        $req->execute(array());
        return $req;
    }
    // function register admin : add admin
    public function register_admin($pseudo,$email,$password){
        $bdd = $this->dbConnect();
        $register_admin = $bdd->prepare('INSERT INTO admins(email, pseudo, password) VALUES (:email, :pseudo, :password)');
        $register_admin->execute([
            "pseudo" => htmlentities($pseudo),
            "email" => htmlentities($email),
            "password" => password_hash($password, PASSWORD_DEFAULT)
        ]);
        return $register_admin;
    }

    // function login admin : admin connection
    public function login_admin($pseudo,$password){
        $bdd = $this->dbConnect();
        $login = $bdd->prepare('SELECT id, password FROM admins WHERE pseudo = ?');
        $login->execute([$pseudo]);
        $login = $login->fetch();
        return $login;        
    }


    public function delete_admin(){
        $bdd = $this->dbConnect();
        $id = (int)$_GET['id'];
        $delete_admin = $bdd->prepare("DELETE admins.* FROM admins WHERE id = ?");
        $delete_admin->execute([$id]);
        return $delete_admin;
    }


    // public function logout_admin(){
    //     unset($_SESSION['admins']);
    //     session_destroy();
    //     header('Location: homeAdmin.php');
    // }

    public function infos_admin(){
        $bdd = $this->dbConnect();
        $infos_admin = $bdd->prepare('SELECT email, pseudo FROM admins WHERE id = ?');
        $infos_admin->execute([$_SESSION["admins"]]);
        $infos_admin = $infos_admin->fetch();
        return $infos_admin;
    }

    // OK : Post a single article
    public function post_article($title,$extract,$content,$upload_img){
        $bdd = $this->dbConnect();
        $post_article = $bdd->prepare("INSERT INTO articles(title, extract, content, image, admin_id) VALUES(:title, :extract, :content, :image, :admin_id)");
        $post_article->execute([
            "admin_id" => $_SESSION['admins'],
            "title" => htmlentities($title),
            "extract" => substr(htmlentities($content), 0,150 ),
            "content" => htmlentities($content),
            "image" => htmlentities($upload_img)

        ]);
        return $post_article;
    }

    // Get a single article
    public function get_article(){
        $bdd = $this->dbConnect();
        $id = (int)$_GET['id'];
        $$articleBack = $bdd->prepare("SELECT articles.*, admins.pseudo FROM articles INNER JOIN admins ON articles.admins_id = admins.id WHERE articles.id = ?");
        $articleBack ->execute['id'];
        $articleBack = $articleBack->fetch();
        return $articleBack;
    }

    // Get all articles
    public function get_articles(){
        $bdd = $this->dbConnect();
        $id = (int)$_GET['id'];
        $articlesBack = $bdd->query("SELECT id, title, extract , content, image, created_at FROM articles ORDER BY created_at DESC");
        $articlesBack = $articlesBack->fetchAll();
        return $articlesBack;
    }

    // Get  article title and content for adminModify.php
    // public function getShortArticle(){
    //     $bdd = $this->dbConnect();
    //     $shortArticles = $bdd->prepare("SELECT articles.*, FROM articles INNER JOIN admins ON articles.admins_id = admins.id AND articles.admins_id = ? ORDER BY created_at DESC");
    //     $shortArticles->execute[$_SESSION['admins']];
    //     $shortArticles = $shortArticles->fetchAll();
    //     return $shortArticles;
    // }

    // Get last 4 articles for page News
    public function get_last_article(){
        $bdd = $this->dbConnect();
        $lastArticle = $bdd->query("SELECT articles.*, id, title, extract, content, image, created_at FROM articles ORDER BY created_at DESC LIMIT 1");
        $lastArticle = $lastArticle->fetchAll();
        return $lastArticle;
    }

    public function delete_article(){
        $bdd = $this->dbConnect();
        $id = (int)$_GET['id'];
        $delete_article = $bdd->prepare("DELETE articles.* FROM articles WHERE id = ?");
        $delete_article->execute(["$id"]);
        return $delete_article;
    }

    public function modify_article($title,$content){
        $bdd = $this->dbConnect();
        $id = (int)$_GET['id'];
        $article_modify = $bdd->prepare("UPDATE articles SET title = :title, extract = :extract, content = :content WHERE id = :id");
        $article_modify->execute([
            // "admin_id" => $_SESSION['admins'],
            "title" => htmlentities($title),
            "extract" => substr(htmlentities($content), 0,150 ),
            "content" => htmlentities($content),
            // "image" => htmlentities($upload_img),
            "id" => $id
        ]);
        return $article_modify;
    }


    public function update_article(){
        $bdd = $this->dbConnect();
        $id = (int)$_GET["id"];
        $update_article = $bdd->prepare("UPDATE articles SET title = :title, extract = :extract, content = :content, image = :image, WHERE id = :id");
        $update_article->execute([
            "title" => htmlentities($titre),
            "extract" => substr(htmlentities($contenu), 0,150),
            "content" => nl2br(htmlentities($contenu)),
            "image" => htmlentities($image),
            "id" => $id
        ]);
        return $update_article;
    }
    

    // public function post_comment_admin(){
    // $bdd = $this->dbConnect();
    // $id_article = (int)$_GET["id"];
    // $post_comment_admin = $bdd->prepare("INSERT INTO comments(admin_id, article_id, content) VALUES (:admin_id, :article_id, :content) ");
    // $post_comment_admin->execute([
    // "admin_id" => $_SESSION['admin'],
    // "article_id" => $id_article,
    // "admin_comments" => nl2br(htmlentities($commentaire_admin)),
    // ]);
    // return $post_comment_admin;
    // }
    
    // public function delete_comment(){
    //     $bdd = $this->dbConnect();
    //     $id = (int)$_GET["id"];
    //     $delete_comment = $bdd->prepare("DELETE comment FROM comments WHERE id = ?");
    //     $delete_comment->execute([$id]);
    //     return $delete_comment;
    // }

    // public function get_comments_admin(){
    //     $bdd = $this->dbConnect();
    //     $comments_admin = $bdd->query("SELECT comments.*, articles.title FROM comments INNER JOIN articles ON comments.article_id = articles.id AND comments.user_id = ?");
    //     $comments_admin = $comments_admin->fetchAll();
    //     return $comments_admin;
    // }

}
