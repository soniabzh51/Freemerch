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
    function pageDeleteArticle(){
        $this->deleteArticle();
        $this->homeAdminBack();
    }

    public function usersManagementBack(){
        require 'app/views/back/usersManagement.php';
    }

    public function adminModifyArticle(){
        $articlesBack = $this->displayArticle();
        
        if(!empty($_POST)){
            $modifyArticle = new \Project\controllers\ControllerBack();
            $errors = $modifyArticle->modifyArticle();
        }
        require 'app/views/back/adminModify.php';
    }

    // function registerAdmin : register new admin
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
        }
        $this->homeAdminBack();
    }

    // login admin
    public function loginAdmin(){
        extract($_POST);
        $error = "Ces identifiants ne correspondent pas à nos enregistrements !";
    
        $loginAdmin = new \Project\models\BackManager();
        $login = $loginAdmin->login_admin($pseudo,$password);
       
        if(password_verify($password, $login['password'])){
            $_SESSION['admins'] = $login['id'];
            // $_SESSION['pseudo'] = $login['pseudo'];
            $this->homeAdminBack();
        }else{
            return $error;
        }
        if($password && $pseudo){
            $_SESSION['admins'] = $login['id'];
        }
            // return $error;
        else{
            return $error;
        }
    }

    // logout admin
    function logoutAdmin(){
        unset($_SESSION['admins']); /********  A FINIR  *****************/ 
        session_destroy();
        $this->loginAdminBack();
    }

    function setArticle(){
        require 'app/views/back/postArticle.php';
    }

    // post article admin 
    function admin_post_article(){    
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
                // $this->homeAdminBack();
            }
            return $errors;
    }

    // public function articleAdminBack(){
    //     $articleAdminBack = new \Project\models\BackManager();
    //     $articlesBack = $this->displayArticle();
    //     require 'app/views/back/articleAdmin.php';
    // }

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

    // Display article title and content for adminModify.php
    // public function displayshortArticle(){
    //     $shortArticle = new \Project\models\BackManager();
    //     $articleShort = $shortArticle->get_title_content();
    //     return $articleShort;
    // }

    // Delete article
    public function deleteArticle(){
        $destroyArticle = new \Project\models\BackManager();
        // $id = $_SESSION['admins'];
        $delete_article = $destroyArticle->delete_article();
        return $delete_article;
    }

    // Change  article content
    public function modifyArticle(){
        extract($_POST);
        $validation = true;
        $errors = [];
        // $upload_imgs = "app/public/images/";
        // $upload_img = $upload_imgs.basename($_FILES["image"]["name"]);
        // $uploadOK = 1;
        // $imageFileType = strtolower(pathinfo($upload_img, PATHINFO_EXTENSION));

        if(empty($title) || empty($content)){
            $validation = false;
            $errors[] = 'Tous les champs sontt obligatoires !'; 
        }elseif ($validation){
            $modifyArticle = new \Project\models\BackManager();
            $article_modify = $modifyArticle->modify_article($title,$content);

            // $this->homeAdminBack();
            // header('Location: indexAdmin.php?action=backHome');
        }
        return $errors;
    }

    
}