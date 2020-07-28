<?php

require_once 'app/views/front/layouts/head.php';
require_once 'app/views/front/layouts/header.php'

?>
<?php if(isset($_SESSION['users'])) : ?>
        <!--  CONTENT -->
        <main>
            <div id="compteBanner">
                <div class="backTop">    
                    <a href="blog"> < Revenir à la page Blog</a>
                </div>
                <div class="disconnect">
                    <a href="home">Déconnexion</a>
                </div>
                <!-- <div class="deleteUser">
                    <a href="index.php?action=deleteUser&id=<?= $infos['id'] ?>">Supprimer mon compte</a>
                </div> -->
                <div class="modifyPassword">
                    <a href="modifyPassword">Modifier mon mot de passe</a>
                </div>

            </div>
            <section id="account">
                <div id="welcome">
                    <h2>Bienvenue sur votre compte <?= $infos_user['pseudo'] ?> !</h2>
                    <p>Adresse mail : <?= $infos['email'] ?></p>
                </div>
                <div class="accountComments">
                    <h2>Derniers commentaires :</h2>
                    
                    
                </div>
            </section>
        </main>
<?php else : ?>
    
<?php endif ?>
<?php
require_once 'app/views/front/layouts/footer.php';
?>
