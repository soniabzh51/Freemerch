<?php
// important pour la sécurité de vos scripts : les sessions
// Démarre une session
session_start();

// // autoload.php generé avec composer
require_once __DIR__ . '/vendor/autoload.php';

// if(file_exists(__DIR__ . '/.env')){
//     $dotenv = \Dotenv\Dotenv::createimmutable(__DIR__);
//     $dotenv->load();
// }


// // Si l'action est diférente de NULL (isset), renvoie sur la méthode du contrôleur appelé
try {
    $controllerBack = new \Project\controllers\ControllerBack();//objet controller
    // object controller
    if (isset($_GET['action'])) { 
        if ($_GET['action'] == 'loginAdmin'){
            $controllerBack->loginAdminBack();
        }     
        elseif($_GET['action'] == 'adminCnc'){
            $controllerBack->loginAdmin();
        }
        elseif($_GET['action'] == 'adminReg'){
            $controllerBack->registerAdmin();
        }
        elseif($_GET['action'] == 'backHome'){
            $controllerBack -> homeAdminBack();
        }
        elseif($_GET['action'] == 'adminDcn'){
            $controllerBack -> logoutAdmin();
        }
        elseif($_GET['action'] == 'setArticle'){
            $controllerBack->setArticle();
        }
        elseif($_GET['action'] == 'AdminPostArticle'){
            $controllerBack->admin_post_article();
        }
        elseif($_GET['action'] == 'displayAllArticles'){
            $controllerBack->articles();
        }
        elseif($_GET['action'] == 'deleteArticle'){
            $controllerBack->pageDeleteArticle();
        }
       elseif($_GET['action'] == 'postsBack'){
           $controllerBack->postsBack();
       }
    }else{
        $controllerBack->login();
    }

} catch (Exception $e) {
        // require 'app/views/back/errorloading.php';
}
?>
