<?php
// important pour la sécurité de vos scripts : les sessions
// Démarre une session
session_start();

// // autoload.php generé avec composer
require_once __DIR__ . '/vendor/autoload.php';

// // Si l'action est diférente de NULL (isset), renvoie sur la méthode du contrôleur appelé
try {
    $controllerBack = new \Project\controllers\ControllerBack();//objet controller
    // object controller
    if (isset($_GET['action'])) {      
        if($_GET['action'] == 'homeAdmin'){
            // homeAdminBack est défini dans ControllerBack.php
            $controllerBack -> homeAdminBack();
        }
        elseif($_GET['action'] == 'posts'){
            // postsBack est défini dans ControllersBack.php
            $controllerBack -> postsBack();
        }
        elseif($_GET['action'] == 'articleAdmin'){
            // articleAdminBackBack est défini dans ControllersBack.php
            $controllerBack -> articleAdminBackBack();
        }
        elseif($_GET['action'] == 'usersManagement'){
            $controllerBack -> usersManagementBack();
        }
        elseif($_GET['action'] == 'delete'){
            $controllerBack -> postsBack();
        }
        elseif($_GET['action'] == 'log_out'){
            $controllerBack -> logout();
        }

    }else{
        $controllerBack -> homeAdmin();
    }

} catch (Exception $e) {
        // require 'app/views/back/errorloading.php';
}
?>
