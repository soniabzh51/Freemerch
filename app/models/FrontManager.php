<?php

namespace Freemerch\models;

class FrontManager extends Manager{

    public function viewFront(){

        //Appel de la bdd par la fonction dbConnect()
        $bdd = $this->dbConnect();  
        // Le modèle prépare la requête serveur
        $req = $bdd->prepare('Votre Methode sql');
        'Votre Methode sql';
        $req->execute(array());
        return $req;
    }
}