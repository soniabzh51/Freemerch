<?php
//  branchement à la bdd, meilleure sécurité 
// car il n'est pas dans le front

namespace Freemerch\models;
class Manager{
    protected function dbConnect(){
        try{
            $bdd = new \PDO('mysql:host=localhost;Freemerch;charset=utf8', 'root', 'Mot de passe');
            return $bdd;
        } catch (Exception $e){
            die('Erreur : ' . $e->getMessage());
        }
    }

}
