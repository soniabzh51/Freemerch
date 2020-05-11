<?php

namespace Project\models;

class BackManager extends Manager{

    public function viewBack(){

        //Appel de la bdd par la fonction dbConnect()
        $bdd = $this->dbConnect();  
        // Le modèle prépare la requête serveur
        $req = $bdd->prepare('Methode sql');
        $req->execute(array());
        return $req;
    }
    // function register admin : check validity, check default
    function register_admin(){
        global $bdd;
    
        extract($_POST);
    
        $validation = true;
    
        $errors = [];
    
        if(empty($pseudo) || empty($email) || empty($emailconf) || empty($password) || empty($passwordconf)){
            $validation = false;
            $errors[] = 'Tous les champs sont obligatoires !';
        }
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $validation = false;
            $errors = "L'adresse e-mail n'est pas valide !";
        }
        if($emailconf != $email){
            $validation = false;
            $errors = "L'adresse e-mail de confirmation est incorrecte !";
        }
        if($passwordconf != $password){
            $validation = false;
            $errors = "Le mot de passe de confirmation est incorrect !";
        }
        /*
        if(pseudo_check($pseudo)){
            $validation = false;
            $errors[] = "Ce pseudo est déjà pris !";
        }
        */
        if($validation){
            $register = $bdd->prepare('INSERT INTO admins(pseudo, email, password) VALUES (:pseudo, :email, :password)');
            $register->execute ([
                "pseudo" => htmlentities($pseudo),
                "email" => htmlentities($email),
                "password" => password_hash($password, PASSWORD_DEFAULT) 
            ]);
            unset($_POST['pseudo']);
            unset($_POST['email']);
            unset($_POST['emailconf']);
        }
        return $errors;
    }
    function delete_admin(){

    }

    //  function pseudo check 
    /*
    function pseudo_check($pseudo){
        global $bdd;
    
        $result = $bdd->prepare('SELECT COUNT(*) FROM admins WHERE pseudo = ?');
        $result->execute([$pseudo]);
    
        $result = $result->fetch()[0];
    
        var_dump($result);
    
        return $result;
    }
    */
    function login_admin(){
        global $bdd;

        extract($_POST);

        $error = "Ces identifiants ne correspondent pas à nos enregistrements !";

        $login = $bdd->prepare('SELECT id, password FROM users WHERE pseudo = ?');
        $login->execute([$pseudo]);

        $login = $login->fetch();
        if(password_verify($password, $login['password'])){
            $_SESSION['admin'] = $login['id'];
            header("Location: homeAdmin.php");
        }else{
                return $error;
            }
            // Verif mdp formulaire avec mdp base de données
            // si ok, on ouvre une session php pour se connecter au compte
        
    }
    function logout_admin(){
        unset($_SESSION['admin']);
        session_destroy();
        header('Location: homeAdmin.php');
    }
    function infos_admin(){
        global $bdd;
    
        $infos = $bdd->prepare('SELECT email, pseudo FROM admins WHERE id = ?');
        $infos->execute([$_SESSION["admin"]]);
    
        $infos = $infos->fetch();
        
        return $infos;
    }
    function post_article(){

    }
    function delete_article(){

    }
    function get_articles(){

    }
    function post_comment(){
        if(isset($_SESSION['user'])){
            global $bdd;
            extract($_POST);
            $error = '';
    
            if(!empty($commentaire)){
                
                $id_article = (int)$_GET["id"];
                $comment = $bdd->prepare('INSERT INTO comments(user_id, article_id, content) VALUES (:user_id, :article_id, :content) ');
                $comment->execute([
                    "user_id"=> $_SESSION['user'],
                    "article_id" => $id_article,
                    "comments" => nl2br(htmlentities($commentaire)),
                ]);
                header("Location: article.php?id=". $id_article);
            }else{
                $error .= 'Vous devez écrire du texte';
            }
            return $error;
        }
    }
    function delete_comment(){

    }
    function get_comments(){
        global $bdd;
        
        $comments = $bdd->prepare("SELECT comments.*, articles.title FROM comments INNER JOIN articles ON comments.article_id = articles.id AND comments.user_id = ?");
        $comments->execute([$_SESSION['user']]);
        
        $comments = $comments->fetchAll();
        
        return $comments;
    }
}
