<?php
// important pour la sécurité de vos scripts : les sessions
// Démarre une session
session_start();

// autoload.php generé avec composer
require_once __DIR__ . '/vendor/autoload.php';

// Si l'action est diférente de NULL (isset), renvoie sur la méthode du contrôleur appelé
try {
    $controllerFront = new \freeMerch\controllers\ControllerFront();//objet controller

    if (isset($_GET['action'])) {      
        if($_GET['action'] == 'about'){
            $controllerFront->aboutFront();
        }
        elseif($_GET['action'] == 'merch'){
            $controllerFront->merchFront();
        }
        elseif($_GET['action'] == 'tools'){
            $controllerFront->toolsFront();
        }
        elseif($_GET['action'] == 'training'){
            $controllerFront->trainingFront();
        }
        elseif($_GET['action'] == 'portfolio'){
            $controllerFront->portfolioFront();
        }
        elseif($_GET['action'] == 'blog'){
            $controllerFront->blogFront();
        }
        elseif($_GET['action'] == 'contact'){
            $controllerFront->contactFront();
        }

    } else{
        $controllerFront->home();
    }

} catch (Exception $e) {
    require 'app/views/frontend/errorloading.php';
}