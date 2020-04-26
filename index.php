<?php
// important pour la sécurité de vos scripts : les sessions
// Démarre une session
session_start();

// // autoload.php generé avec composer
require_once __DIR__ . '/vendor/autoload.php';

// // Si l'action est diférente de NULL (isset), renvoie sur la méthode du contrôleur appelé
try {
    $controllerFront = new \Project\controllers\ControllerFront();//objet controller
        // object controller
    if (isset($_GET['action'])) {      
        if($_GET['action'] == 'home'){
            // aboutFront est défini dans ControllerFront.php
            $controllerFront -> homeFront();
        }
        elseif($_GET['action'] == 'about'){
            // merchFront est défini dans ControllerFront.php
            $controllerFront -> aboutFront();
        }

        elseif($_GET['action'] == 'merch'){
            // merchFront est défini dans ControllerFront.php
            $controllerFront -> merchFront();
        }
        elseif($_GET['action'] == 'tools'){
             // toolsFront est défini dans ControllerFront.php
            $controllerFront -> toolsFront();
        }
        elseif($_GET['action'] == 'training'){
            // trainingFront est défini dans ControllerFront.php
            $controllerFront -> trainingFront();
        }
        elseif($_GET['action'] == 'portfolio'){
            // portfolioFront est défini dans ControllerFront.php
            $controllerFront -> portfolioFront();
        }
        elseif($_GET['action'] == 'blog'){
            // blogFront est défini dans ControllerFront.php
            $controllerFront -> blogFront();
        }
        elseif($_GET['action'] == 'contact'){
            // contactFront est défini dans ControllerFront.php
            $controllerFront -> contactFront();
        }

    } else{
        $controllerFront -> home();
    }

} catch (Exception $e) {
    // require 'app/views/front/errorloading.php';
}
?>

