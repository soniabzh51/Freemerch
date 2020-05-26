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

    // function register admin 
    public function register_admin($pseudo,$email,$password){
        $bdd = $this->dbConnect();
        $register_admin = $bdd->prepare('INSERT INTO admins(email, pseudo, password) VALUES (:email, :pseudo, :password)');
        $register_admin->execute([
            "pseudo" => htmlentities($pseudo),
            "email" => htmlentities($email),
            "password" => password_hash($password, PASSWORD_DEFAULT)
        ]);
        return $register_admin;
    }

    public function delete_admin(){
        $bdd = $this->dbConnect();
        $id = (int)$_GET['id'];
        $delete_admin = $bdd->prepare("DELETE admin.* from admins WHERE id = ?");
        $delete_admin->execute([$id]);
        return $delete_admin;
    }

    public function login_admin(){
        $bdd = $this->dbConnect();
        $login_admin = $bdd->prepare('SELECT id, password FROM admins WHERE pseudo = ?');
        $login_admin->execute([$pseudo]);
        $login_admin = $login_admin->fetch();
        return $login_admin;        
    }

    public function logout_admin(){
        unset($_SESSION['admin']);
        session_destroy();
        header('Location: homeAdmin.php');
    }

    public function infos_admin(){
        $bdd = $this->dbConnect();
        $infos_admin = $bdd->prepare('SELECT email, pseudo FROM admins WHERE id = ?');
        $infos_admin->execute([$_SESSION["admin"]]);
        $infos_admin = $infos_admin->fetch();
        return $infos_admin;
    }

    public function post_article(){
        $bdd = $this->dbConnect();
        $post_article = $bdd->prepare("INSERT INTO articles(title, extract, content, image) VALUES(:title, :extract, :content, :image)");
        $post_article->execute([
            "title" => htmlentities($titre),
            "extract" => substr(htmlentities($contenu), 0,150 ),
            "content" => htmlentities($contenu),
            "image" => htmlentities($image)
        ]);
        return $post_article;
    }

    public function delete_article(){
        $bdd = $this->dbConnect();
        $id = (int)$_GET['id'];
        $delete_article = $bdd->prepare("DELETE article.* from articles WHERE id = ?");
        $delete_article->execute([$id]);
        return $delete_article;
    }

    public function update_article(){
        $bdd = $this->dbConnect();
        $id = (int)$_GET["id"];
        $update_article = $bdd->prepare("UPDATE articles SET title = :title, extract = :extract, content = :content, image = :image, WHERE id = :id");
        $update_article->execute([
            "title" => htmlentities($titre),
            "extract" => substr(htmlentities($contenu), 0,150),
            "content" => nl2br(htmlentities($contenu)),
            "image" => htmlentities($image),
            "id" => $id
        ]);
        return $update_article;
    }

    public function get_articles_admin(){
        $bdd = $this->dbConnect();
        $articles_admin = $bdd->query("SELECT id, title FROM articles ORDER BY id DESC");
        $articles_admin = $articles_admin->fetchAll();
        return $articles_admin;
    }

    public function get_article_admin(){
        $bdd = $this->dbConnect();
        $id = (int)$_GET["id"];
        $article_admin = $bdd->prepare("SELECT ");
        $article_admin->execute([$id]);
        $article_admin = $article_admin->fetch();
        return $article_admin;
    }

    public function post_comment_admin(){
    $bdd = $this->dbConnect();
    $id_article = (int)$_GET["id"];
    $post_comment_admin = $bdd->prepare("INSERT INTO comments(admin_id, article_id, content) VALUES (:admin_id, :article_id, :content) ");
    $post_comment_admin->execute([
    "admin_id" => $_SESSION['admin'],
    "article_id" => $id_article,
    "admin_comments" => nl2br(htmlentities($commentaire_admin)),
    ]);
    return $post_comment_admin;
    }
    
    public function delete_comment(){
        $bdd = $this->dbConnect();
        $id = (int)$_GET["id"];
        $delete_comment = $bdd->prepare("DELETE comment FROM comments WHERE id = ?");
        $delete_comment->execute([$id]);
        return $delete_comment;
    }

    public function get_comments_admin(){
        $bdd = $this->dbConnect();
        $comments_admin = $bdd->query("SELECT comments.*, articles.title FROM comments INNER JOIN articles ON comments.article_id = articles.id AND comments.user_id = ?");
        $comments_admin = $comments_admin->fetchAll();
        return $comments_admin;
    }

}
