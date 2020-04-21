<?php

namespace freeMerch\controllers;
class ControllerFront
{
    function home(){

        // Appel du modèle que l'on stocke dans une variable ($homeFront)
        $homeFront = new \freeMerch\FrontManager();
        /* 
        Appel de la méthode du modèle viewFront
        La variable $accueil stocke les données récupérées dans la
        méthode du modèle (bdd). Cette variable sera ensuite injectée
        dans la view pour afficher les données
        */
        $accueil = $homeFront->viewFront();

        require 'app/views/home.php';
    }
    function aboutFront(){
        require 'app/views/about.php';
    }
    function merchFront(){
        require 'app/views/merch.php';
    }
    function toolsFront(){
        require 'app/views/tools.php';
    }
    function trainingFront(){
        require 'app/views/training.php';
    }
    function portfolioFront(){
        require 'app/views/portfolio.php';
    }
    function blogFront(){
        require 'app/views/blogt.php';
    }
    function contacFront(){
        require 'app/views/contact.php';
    }
}