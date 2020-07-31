<?php
//  branchement à la bdd, meilleure sécurité 
// car il n'est pas dans le front

namespace Project\models;
class Manager{
    protected function dbConnect(){
        try{
            $bdd = new \PDO('mysql:host=localhost;dbname=Freemerch;charset=utf8', 'root', 'root');
            // $bdd = new \PDO('mysql:host=mysql-cp6.alwaysdata.net;dbname=cp6_freemerch;charset=utf8', 'cp6', 'HORT1512');
            return $bdd;
        } catch (Exception $e){
            die('Erreur : ' . $e->getMessage());
        }
    }

}
