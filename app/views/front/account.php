<?php

require_once 'app/views/front/layouts/head.php';
require_once 'app/views/front/layouts/header.php'

?>
<?php if(isset($_SESSION['users'])) : ?>
        <!--  CONTENT -->
        <main>
            <div id="compteBanner">
                <div class="backTop">    
                    <a href="index.php?action=blog"> < Revenir à la page Blog</a>
                </div>
                <div class="disconnect">
                    <a href="index.php?action=home">Déconnexion</a>
                </div>
                <!-- <div class="deleteUser">
                    <a href="index.php?action=deleteUser&id=<?= $infos['id'] ?>">Supprimer mon compte</a>
                </div> -->
                <div class="modifyPassword">
                    <a href="index.php?action=modifyPassword">Modifier mon mot de passe</a>
                </div>

            </div>
            <section id="account">
                <div id="welcome">
                    <h2>Bienvenue sur votre compte <?= $infos_user['pseudo'] ?> !</h2>
                    <p>Adresse mail : <?= $infos['email'] ?></p>
                </div>
                <div class="accountComments">
                    <h2>Derniers commentaires :</h2>
                    <?php
                    foreach($comments as $comment) :
                ?>
                <p class="lastComments">Posté le <time datetime="<?= $comments['created_at'] ?>"><?= formatage_date($comments['created_at']) ?></time>
                sur l'article <?= $comment['title'] ?></p>
                <p><?= $comment['content'] ?></p> 

                    <?php
                    endforeach
                ?>
                    <!-- <p class="date">Posté par<?= $user['pseudo']?> le <time datetime=""></time> :</p> -->
                </div>
            </section>
        </main>
<?php else : ?>
    
<?php endif ?>
<?php
require_once 'app/views/front/layouts/footer.php';
?>
