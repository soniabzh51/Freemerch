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
    $controllerFront = new \Project\controllers\ControllerFront();//objet controller
        // object controller
    if (isset($_GET['action'])) {      
        if($_GET['action'] == 'home'){
            // homeFront is defined in ControllerFront.php
            $controllerFront->home();
        }
        elseif($_GET['action'] == 'visuelMerch'){
            // visuelMerchFront is defined in ControllerFront.php
            $controllerFront->visuelMerchFront();
        }
        elseif($_GET['action'] == 'vitrine'){
            // vitrineFront is defined in ControllerFront.php
            $controllerFront->visuelMerchFront();
        }
        elseif($_GET['action'] == 'bookmerchandising'){
             // bookmerchandisingFront is defined in ControllerFront.php
            $controllerFront->bookmerchandisingFront();
        }
        elseif($_GET['action'] == 'training'){
            // trainingFront is defined in ControllerFront.php
            $controllerFront->trainingFront();
        }
        elseif($_GET['action'] == 'portfolio'){
            // portfolioFront is defined in ControllerFront.php
            $controllerFront->portfolioFront();
        }
        elseif($_GET['action'] == 'news'){
            // newsFront is defined in ControllerFront.php
            $controllerFront->newsFront();
        }
        elseif($_GET['action'] == 'displayNews'){
            // displayFront is defined in ControllerFront.php
            $controllerFront->displayNews();
        }
        elseif($_GET['action'] == 'blog'){
            // blogFront is defined in ControllerFront.php
            $controllerFront->blogFront();
        }
        elseif($_GET['action'] == 'userReg'){
            // userReg is defined in ControllerFront.php 
            $controllerFront->registerUser();
        }
        elseif($_GET['action'] == 'userCnc'){
            // loginUser is defined in ControllerFront.php
            $controllerFront->loginUser();
        }
        elseif($_GET['action'] == 'userDis'){
            // logoutUser is defined in ControllerFront.php
            $controllerFront->logoutUser();
        }
            // OK
        elseif($_GET['action'] == 'modifyPassword'){
            $controllerFront->modifyPassword();
        }
        elseif($_GET['action'] == 'changePassword'){
            $controllerFront->changePassword();
        }
        elseif($_GET['action'] == 'backAccount'){
            $controllerFront->accountFront();
        }
        elseif($_GET['action'] == 'deleteUser'){
            // pageDeleteUser is defined in ControllerFront.php
            // $controllerFront->pageDeleteUser();
            $controllerFront->deleteUser();
        }
        elseif($_GET['action'] == 'contact'){
            // contactFront est défini dans ControllerFront.php
            $controllerFront->contactFront();
        }
        // elseif($_GET['action'] == 'postEmail'){
            // postEmail est défini dans ControllerFront.php
        //     $controllerFront ->contact();
        // }
        // elseif($_GET['action'] == 'contactForm'){
        //     // contactFormFront est défini dans ControllerFront.php
        //     $controllerFront -> contactFormFront();
        // }
        elseif($_GET['action'] == 'error404'){
            // error404Front est défini dans ControllerFront.php
            $controllerFront->error404Front();
        }
        elseif($_GET['action'] == 'rgpd'){
            // rgpdFront est défini dans ControllerFront.php
            $controllerFront->rgpdFront();
        }
        elseif($_GET['action'] == 'mentionsLegales'){
            // mentionsLegalesFront est défini dans ControllerFront.php
            $controllerFront->mentionsLegalesFront();
        }
        elseif($_GET['action'] == 'sitemap'){
            // sitemapFront est défini dans ControllerFront.php
            $controllerFront->sitemapFront();
        }
        else{
            if($_GET['action'] == "")
            {
                $controllerFront->home();
            }
            else
            {
                $controllerFront->error404Front();  
            } 
        }

    } else{
        $controllerFront->home();
    }

} catch (Exception $e) {
    // require 'app/views/front/errorloading.php';
}
?>

