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
    public function newsFront(){
        $newsFront = new \Project\models\FrontManager();
        $articlesNews = $this->displayNews();
        require 'app/views/front/news.php';
    }
    function displayNews(){
        $newsArticle = new \Project\models\FrontManager();
        $articleNews = $newsArticle->getArticleNews();
        return $articleNews;
    }
    function blogFront(){
        require 'app/views/front/blog.php';
    }
    // function pageDeleteUser(){
    //     $this->deleteUser();
    //     $this->home();
    // }
    // OK
    public function modifyPassword(){
        require 'app/views/front/userModifyPassword.php';
    }
    function contactFront(){
        // if(!empty($_POST)){
        //     $contact = new \Project\controllers\ControllerFront();
        //     $errors = $contact->contact();
        // }
        require 'app/views/front/contact.php';
    }
    function accountFront(){
        $infos = $this->infos();
        require 'app/views/front/account.php';
    }
    function error404Front(){
        require 'app/views/front/error404.php';
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

    // function register : register new user
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
        // return $errors;
        $this->blogFront();

    }

    // function loginUser : user connection
    function loginUser(){
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
    function logoutUser(){
        unset($_SESSION['users']);
        session_destroy();
        $this->home();
    }

    // Display user infos
    function infos(){
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
        // return $userDelete;
        $this->home();
    }

    
    // Get new user pasword from the form in page userModifyPassword.php
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
    // function post_comment(){
    //     if(isset($_SESSION['users'])){
    //         extract($_POST);
    //         $error = '';
    
    //         if(!empty($commentaire)){
                
    //             $id_article = (int)$_GET["id"];
    //             $comment = $bdd->prepare('INSERT INTO comments(user_id, article_id, content) VALUES (:user_id, :article_id, :content) ');
    //             $comment->execute([
    //                 "user_id"=> $_SESSION['user'],
    //                 "article_id" => $id_article,
    //                 "comments" => nl2br(htmlentities($commentaire)),
    //             ]);
    //             header("Location: article.php?id=". $id_article);
    //         }else{
    //             $error .= 'Vous devez écrire du texte';
    //         }
    //         return $error;
    //     }
    // }    
    // function visitorsMail : allows visitors sending mail to Admin
    // public function contact(){

    //     extract($_POST);
    //     $validation = true;
    //     $errors = [];

    //     if (empty($name) || empty($firstName) || empty($email) || empty($address) || empty($subject) || empty($message)){
    //         $validation = false;
    //         $errors[] = "Tous les champs sont obligatoires !";
        
    //     } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //         $validation = false;
    //         $errors[] = "L'adresse e-mail n'est pas valide !";
    //     }elseif ($validation){
    //         $to = 'ipstylefreemerch@gmail.com';
    //         $intro = 'Vous avez un nouveau message de ' . $name . $firstName;
    //         $content = '
    //         <h2>Vous avez reçu un nouveau message de ' . $name . $firstName .'</h2>
    //         <h2>Adresse e-mail: ' . $email .'</h2>
    //         <h2>Objet: ' . nl2br($subject) .'</h2>
    //         <p>' . nl2br($message) . '</p>';
    //         $headers = 'From' . $name . $firstName . $email . "\r\n";
    //         $headers .= 'MIME-Version: 1.0' . "\r\n";
    //         $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

    //         mail($to, $intro, $content, $titles);

    //         unset($_POST['name']);
    //         unset($_POST['firstName']);
    //         unset($_POST['email']);
    //         unset($_POST['address']);
    //         unset($_POST['subject']);
    //         unset($_POST['message']);

            // $contactAdmin = new \Project\models\FrontManager();
            // $contactAdmin->visitors($name, $firstName, $email, $address, $subject, $message);
        // }
        // $this->contactFront();
    //     return $errors;

    // }

    // public function formatage_date($publication){
    //     $publication = explode(" ", $publication);
    //     $date = explode('-', $publication[0]);
    //     $hour = explode(':', $publication[1]);
    //     $months = ['', 'janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'novembre', 'décembre'];
        
    //     $resultat = $date[2] . ' ' . $months[(int)$date[1]] . ' ' . $date[0] . ' à ' . $hour[0] . 'h' . $hour[1];
    //     return $resultat;
    // }


}