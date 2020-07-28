<?php

namespace Project\models;

class BackManager extends Manager{

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
    // Admin connection
    public function login_admin($pseudo,$password){
        $bdd = $this->dbConnect();
        $login = $bdd->prepare('SELECT id, password FROM admins WHERE pseudo = ?');
        $login->execute([$pseudo]);
        $login = $login->fetch();
        return $login;        
    }
    public function logout_admin(){
        unset($_SESSION['admins']);
        session_destroy();
        header('Location: loginAdmin.php');
    }
    // Post a single article
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
        $$articleBack = $bdd->prepare("SELECT id, title, extract, content, image, crated_at FROM articles WHERE id = ?");
        $articleBack->execute([$id]);
        $articleBack = $articleBack->fetch();
        return $articleBack;
    }
    // Get all articles
    public function get_articles(){
        $bdd = $this->dbConnect();
        $articlesBack = $bdd->query("SELECT id, title, extract, content, image, created_at FROM articles ORDER BY created_at DESC");
        $articlesBack = $articlesBack->fetchAll();
        return $articlesBack;
    }
    public function delete_article(){
        $bdd = $this->dbConnect();
        $id = (int)$_GET['id'];
        $delete_article = $bdd->prepare("DELETE articles.* FROM articles WHERE id = ?");
        $delete_article->execute(["$id"]);
        return $delete_article;
    }
}
