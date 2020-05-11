<?php

namespace Project\models;

class FrontManager extends Manager{

    public function viewFront(){

        //Appel de la bdd par la fonction dbConnect()
        $bdd = $this->dbConnect();  
        // Le modèle prépare la requête serveur
        $req = $bdd->prepare('Methode sql');
        $req->execute(array());
        return $req;
    }

    public function addUser($pseudo,$email,$password) {

        $bdd = $this->dbConnect();
        $register = $bdd->prepare('INSERT INTO users(pseudo, email, password) VALUES (:pseudo, :email, :password)');
        $register->execute ([
            "pseudo" => htmlentities($pseudo),
            "email" => htmlentities($email),
            "password" => password_hash($password, PASSWORD_DEFAULT) 
        ]);
        return $register;
    }

    //  function pseudo check : check if another user has the same pseudo 
    public function pseudo_check($addPseudo){
        $bdd = $this->dbConnect();
        $result = $bdd->prepare('SELECT COUNT(*) FROM users WHERE pseudo = ?');
        $result->execute([$addPseudo]);
        $result = $result->fetch()[0]; 
        
        var_dump($result);
        return $result;
    }
    
    

    
    





}