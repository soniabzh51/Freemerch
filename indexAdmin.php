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
        if($_GET['action'] == 'adminCnc'){
            // homeAdminBack est défini dans ControllerBack.php
            $controllerBack->loginAdmin();
        }
        elseif($_GET['action'] == 'adminReg'){
            $controllerBack->registerAdmin();
        }
        // OK
        elseif($_GET['action'] == 'backHome'){
            $controllerBack -> homeAdminBack();
        }
        // OK
        elseif($_GET['action'] == 'setArticle'){
            $controllerBack->setArticle();
        }
        // elseif($_GET['action'] == 'lastArticlesPost'){
        //     $controllerBack -> getArticlesById();
        // }
        // elseif($_GET['action'] == 'getArticlesById'){
        //     $controllerBack -> getArticlesById();
        // }
        // elseif($_GET['action'] == 'getArticlesByDate'){
        //     $controllerBack -> getArticlesByDate();
        // }

        // Affiche un article
        // elseif($_GET['action'] == 'showArticleAdmin'){
        //     // articleAdminBackBack est défini dans ControllersBack.php
        //     $controllerBack -> showArticleAdmin();
        // }
        // OK
        elseif($_GET['action'] == 'AdminPostArticle'){
            $controllerBack->admin_post_article();
        }
       elseif($_GET['action'] == 'postsBack'){
           $controllerBack->postsBack();
       }
        // elseif($_GET['action'] == 'posts'){
        //     $controllerBack->getArticle();
        // }
        // elseif($_GET['action'] == 'usersManagement'){
        //     $controllerBack->usersManagementBack();
        // }
        // // action de suppression d'article depuis la page "posts.php"
        // elseif($_GET['action'] == 'delete'){
        //     $controllerBack->postsBack();
        // }
        // elseif($_GET['action'] == 'adminDcn'){
        //     $controllerBack->logoutAdmin();
        // }

    }else{
        $controllerBack->login();
    }

} catch (Exception $e) {
        // require 'app/views/back/errorloading.php';
}
?>
