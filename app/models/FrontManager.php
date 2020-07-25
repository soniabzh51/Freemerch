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
    // Get a single article
    public function article(){
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
    // Get last 4 articles for page news.php
    public function getArticleNews(){
        $bdd = $this->dbConnect();
        $articleNews = $bdd->query("SELECT articles.*, admins.pseudo FROM articles INNER JOIN admins ON articles.admin_id = admins.id ORDER BY created_at DESC LIMIT 4");
        $articleNews = $articleNews->fetchAll();
        return $articleNews;
    }
    // Register user 
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
    // Check if another user has the same pseudo 
    public function pseudo_user($pseudo){
        $bdd = $this->dbConnect();
        $pseudo_user = $bdd->prepare('SELECT COUNT(*) FROM users WHERE pseudo = ?');
        $pseudo_user->execute([$pseudo]);
        $pseudo_user= $pseudo_user->fetch()[0]; 
        return $pseudo_user;
    }
    // User connection
    public function login_user($pseudo,$password){
        $bdd = $this->dbConnect();
        $login = $bdd->prepare('SELECT id, password FROM users WHERE pseudo = ?');
        $login->execute([$pseudo]);
        $login = $login->fetch();
        return $login;
    }
    // Get user's infos : 
    public function infos_user(){
        $bdd = $this->dbConnect();
        $infos = $bdd->prepare('SELECT id, email, pseudo FROM users WHERE id = ?');
        $infos ->execute([$_SESSION['users']]);
        $infos = $infos->fetch();
        return $infos;
    }
    // Delete user
    public function delete_user($id){
        $bdd = $this->dbConnect();
        $id = (int)$_GET['id'];
        $userDelete = $bdd->prepare('DELETE users.* FROM users WHERE id = ?');
        $userDelete->execute([$id]);
        return $userDelete;
    }
    // Allows user to change password
    public function changeUserPassword($newPassword){
        $bdd = $this->dbConnect();
        $changePassword = $bdd->prepare('UPDATE users SET password = :password WHERE id = :id');
        $changePassword->execute([
            'password' => password_hash($newPassword, PASSWORD_DEFAULT),
            'id' => $_SESSION['users']
        ]);
        return $changePassword;
    }
    // Check password
    public function passwordCheck()
    {
        $bdd = $this->dbConnect();
        $passwordCheck = $bdd->prepare('SELECT password FROM users WHERE id = ?');
        $passwordCheck->execute([$_SESSION['users']]);
        $passwordCheck = $passwordCheck->fetch();
        return $passwordCheck['password'];
    }
}
