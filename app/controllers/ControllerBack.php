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

        require 'app/views/back/posts.php';
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
        $this->loginAdmin();
    }

    function setArticle(){
        require 'app/views/back/postArticle.php';
    }
    // post article admin 
    function admin_post_article(){
        // if(isset($_SESSION['admins'])) {
    
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
    }

    public function deleteArticle(){
        $destroyArticle = new \Project\models\BackManager();
        $id = $_SESSION['admins'];
        $delete_article = $destroyArticle->deleteArticle($id);
        return $delete_article;
    }
    public function usersManagementBack(){
        require 'app/views/back/usersManagement.php';
    }

    
}