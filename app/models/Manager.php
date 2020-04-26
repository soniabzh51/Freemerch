<?php
//  branchement à la bdd, meilleure sécurité 
// car il n'est pas dans le front

namespace Project\models;
class Manager{
    protected function dbConnect(){
        try{
            $bdd = new \PDO('mysql:host=localhost;dbname=Freemerch;charset=utf8', 'root', 'root');
            return $bdd;
        } catch (Exception $e){
            die('Erreur : ' . $e->getMessage());
        }
    }

}
