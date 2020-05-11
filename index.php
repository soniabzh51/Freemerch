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
            // homeFront est défini dans ControllerFront.php
            $controllerFront -> homeFront();
        }
        elseif($_GET['action'] == 'about'){
            // aboutFront est défini dans ControllerFront.php
            $controllerFront -> aboutFront();
        }
        elseif($_GET['action'] == 'visuelMerch'){
            // visuelMerchFront est défini dans ControllerFront.php
            $controllerFront -> visuelMerchFront();
        }
        elseif($_GET['action'] == 'vitrine'){
            // vitrineFront est défini dans ControllerFront.php
            $controllerFront -> visuelMerchFront();
        }
        elseif($_GET['action'] == 'bookmerchandising'){
             // bookmerchandisingFront est défini dans ControllerFront.php
            $controllerFront -> bookmerchandisingFront();
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
        elseif($_GET['action'] == 'article'){
            // articleFront est défini dans ControllerFront.php
            $controllerFront -> articleFront();
        }
        elseif($_GET['action'] == 'compte'){
            // compteFront est défini dans ControllerFront.php
            $controllerFront -> compteFront();
        }
        elseif($_GET['action'] == 'contact'){
            // contactFront est défini dans ControllerFront.php
            $controllerFront -> contactFront();
        }
        elseif($_GET['action'] == 'erreur404'){
            // erreur404Front est défini dans ControllerFront.php
            $controllerFront -> erreur404Front();
        }
        elseif($_GET['action'] == 'rgpd'){
            // rgpdFront est défini dans ControllerFront.php
            $controllerFront -> rgpdFront();
        }
        elseif($_GET['action'] == 'mentionsLegales'){
            // mentionsLegalesFront est défini dans ControllerFront.php
            $controllerFront -> mentionsLegalesFront();
        }
        elseif($_GET['action'] == 'sitemap'){
            // sitemapFront est défini dans ControllerFront.php
            $controllerFront -> sitemapFront();
        }

    } else{
        $controllerFront -> home();
    }

} catch (Exception $e) {
    // require 'app/views/front/errorloading.php';
}
?>

