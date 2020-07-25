<?php

namespace Project\controllers;
class ControllerFront
{
    public function home(){
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
    public function aboutFront(){
        require 'app/views/front/about.php';
    }
    public function visuelMerchFront(){
        require 'app/views/front/visuelMerch.php';
    }
    public function vitrineFront(){
        require 'app/views/front/vitrine.php';
    }
    public function bookmerchandisingFront(){
        require 'app/views/front/bookmerchandising.php';
    }
    public function trainingFront(){
        require 'app/views/front/training.php';
    }
    public function portfolioFront(){
        require 'app/views/front/portfolio.php';
    }
    // Display last 4 articles in page news.php
    public function newsFront(){
        $newsFront = new \Project\models\FrontManager();
        $articlesNews = $this->displayNews();
        require 'app/views/front/news.php';
    }
    public function displayNews(){
        $newsArticle = new \Project\models\FrontManager();
        $articleNews = $newsArticle->getArticleNews();
        return $articleNews;
    }
    public function blogFront(){
        require 'app/views/front/blog.php';
    }
    public function modifyPassword(){
        require 'app/views/front/userModifyPassword.php';
    }
    public function contactFront(){
        require 'app/views/front/contact.php';
    }
    // Display user's infos
    public function accountFront(){
        $infos = $this->infos();
        require 'app/views/front/account.php';
    }
    public function error404Front(){
        require 'app/views/front/error404.php';
    }
    public function rgpdFront(){
        require 'app/views/front/rgpd.php';
    }
    public function mentionsLegalesFront(){
        require 'app/views/front/mentionsLegales.php';
    }
    public function sitemapFront(){
        require 'app/views/front/sitemap.php';
    }
    // Register new user
    public function registerUser(){
        extract($_POST);
        $validation = true;
        $errors = [];
        if(empty($pseudo) || empty($email) || empty($password)){
            $validation = false;
            $errors[] = 'Tous les champs sont obligatoires !';
        }
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $validation = false;
            $errors = "L'adresse e-mail n'est pas valide !";
        }
        if(($passwordConf != $password)) {
            $validation = false;
            $errors[] = 'Erreur dans la confirmation de votre mot de passe !';
        }
        if ($pseudo){
            $selectPseudo = new \Project\models\FrontManager();
            $userPseudo = $selectPseudo->pseudo_user($pseudo);
            if($userPseudo) {
                $validation = false;
                $errors[] = "Ce pseudo est déjà utilisé !";    
            }
        }
        if($validation){
            $register = new \Project\models\FrontManager();
            $userRegister = $register->register_user($pseudo,$email,$password);
            unset($_POST['pseudo']);
            unset($_POST['email']);
            unset($_POST['password']);
        }
        $this->blogFront();
    }
    // User connection
    public function loginUser(){
        extract($_POST);
        $error = "Ces identifiants ne correspondent pas à nos enregistrements !";
        $login = new \Project\models\FrontManager();
        $login = $login->login_user($pseudo,$password);
        if(password_verify($password, $login['password'])){
            $_SESSION['users'] = $login['id'];
            $_SESSION['pseudo'] = $login['pseudo'];
            $this->accountFront();
        }else{
            $this->home();
            return $error;
        }
    }
    // Disconnect user
    public function logoutUser(){
        unset($_SESSION['users']);
        session_destroy();
        $this->home();
    }
    // Display user's infos
    public function infos(){
        $userInfos = new \Project\models\FrontManager();
        $infos = $userInfos->infos_user();
        return $infos;
    }
    // Delete user
    public function deleteUser(){
        $user = new \Project\models\FrontManager();
        $userDelete = $user->delete_user();
        unset($_SESSION['users']);
        session_destroy();
        $this->home();
    }
    // Allows user to change password
    public function changePassword(){
        if(isset($_SESSION['users'])) {
            extract($_POST);
            $validation = true;
            $errors = [];
            if(empty($password) || empty($newPassword) || empty($newPasswordConf)){
                $validation = false;
                $errors[] = 'Tous les champs sont obligatoires !';
            }
            if($newPasswordConf != $newPassword) {
                $validation = false;
                $errors[] = 'Erreur dans la confirmation de votre mot de passe!';
            }
            if (!empty($password)) {
                $id = $_SESSION['users'];
                $testPassword = new \Project\models\FrontManager();
                $passwordCheck = $testPassword-> passwordCheck();
                if (!password_verify($password, $passwordCheck)) {
                    $validation = false;
                    $errors[] = "Ce mot de passe est déjà utilisé !";
                }
            }
            if($validation) {
                $changePassword = new \Project\models\FrontManager();
                $passwordChange= $changePassword->changeUserPassword($newPassword);
                $this->blogFront();
            }
            return $errors;
        }
    }
}