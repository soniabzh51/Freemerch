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
    function merchFront(){
        require 'app/views/front/merch.php';
    }
    function toolsFront(){
        require 'app/views/front/tools.php';
    }
    function trainingFront(){
        require 'app/views/front/training.php';
    }
    function portfolioFront(){
        require 'app/views/front/portfolio.php';
    }
    function blogFront(){
        require 'app/views/front/blog.php';
    }
    function contacFront(){
        require 'app/views/front/contact.php';
    }
}