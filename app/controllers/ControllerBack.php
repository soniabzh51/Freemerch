<?php

namespace Project\controllers;
class ControllerBack
{
    public function login(){
        $loginBack = new \Project\models\BackManager();
         /* 
        Appel de la méthode du modèle viewFront
        La variable $accueil stocke les données récupérées dans la
        méthode du modèle (bdd). Cette variable sera ensuite injectée
        dans la view pour afficher les données
        */
        $accueilBack = $loginABack->viewBack();
        require 'app/views/back/loginAdmin.php';
    }
    public function loginAdminBack(){
        require 'app/views/back/loginAdmin.php';
    }
    public function homeAdminBack(){
        require 'app/views/back/homeAdmin.php';
    }
    public function register(){
        require 'app/views/back/loginAdmin.php';
    }
    public function postsBack(){
        $articlesBack = $this->displayArticles();
        require 'app/views/back/posts.php';
    }
    public function pageDeleteArticle(){
        $this->deleteArticle();
        $this->homeAdminBack();
    }
    // Register new admin
    public function registerAdmin(){
        extract($_POST);
        $validation = true;
        $errors = [];
        if(empty($pseudo) || empty($email) || empty($password)) {
            $validation = false;
            $errors[] = 'Tous les champs sont obligatoires !';
        }
        if(($passwordConf != $password) || ($emailConf != $email)) {
            $validation = false;
            $errors[] = 'Erreur dans le confirmation de votre email ou de votre mot de passe !';
        }
        if($validation){
            $register = new \Project\models\BackManager();
            $register = $register->register_Admin($pseudo,$email,$password);
            unset($_POST['pseudo']);
            unset($_POST['email']);
            $this->homeAdminBack();
        }else{
            $this->loginAdminBack();
        }
    }
    // Admin connection
    public function loginAdmin(){
        extract($_POST);
        $error = "Ces identifiants ne correspondent pas à nos enregistrements !";
        $loginAdmin = new \Project\models\BackManager();
        $login = $loginAdmin->login_admin($pseudo,$password);
        if(password_verify($password, $login['password'])){
            $_SESSION['admins'] = $login['id'];
            $this->homeAdminBack();
        }else{
            $this->loginAdminBack();
        }
        if($password && $pseudo){
            $_SESSION['admins'] = $login['id'];
        }
        else{
            $this->loginAdminBack();
        }
    }
    // Disconnect admin
    public function logoutAdmin(){
        unset($_SESSION['admins']);
        session_destroy();
        $this->loginAdminBack();
    }
    public function setArticle(){
        require 'app/views/back/postArticle.php';
    }
    // Post article admin 
    public function admin_post_article(){    
            extract($_POST);
            $validation = true;
            $errors = [];
            $upload_imgs = "app/public/images/";
            $upload_img = $upload_imgs.basename($_FILES["image"]["name"]);
            $uploadOK = 1;
            $imageFileType = strtolower(pathinfo($upload_img, PATHINFO_EXTENSION));
            if(empty($title) || empty($content)){
                $validation = false;
                $errors[] = 'Tous les champs sont obligatoires !'; 
            }elseif ($validation){
                $article = new \Project\models\BackManager();
                $article->post_article($title,$extract,$content,$upload_img);
                header('Location: indexAdmin.php?action=backHome');
            }
            return $errors;
    }
    // Display a single article
    public function displayArticle(){
        $backArticle = new \Project\models\BackManager();
        $articleBack = $backArticle->get_article();
        return $articleBack;
    }
    // Display all articles
    public function displayArticles(){
        $backArticles = new \Project\models\BackManager();
        $articlesBack = $backArticles->get_articles();
        return $articlesBack;
    }
    // Delete article
    public function deleteArticle(){
        $destroyArticle = new \Project\models\BackManager();
        $delete_article = $destroyArticle->delete_article();
        return $delete_article;
    }
}