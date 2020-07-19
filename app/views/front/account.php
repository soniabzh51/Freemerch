<?php

require_once 'app/views/front/layouts/head.php';
require_once 'app/views/front/layouts/header.php'

?>
<?php if(isset($_SESSION['users'])) : ?>
        <!--  CONTENT -->
        <main>
            <div id="compteBanner">
                <div class="backTop">    
                    <a href="index.php?action=blog">Revenir à la page Blog</a>
                </div>
                <div class="disconnect">
                    <a href="index.php?action=home">Déconnexion</a>
                </div>
            </div>
            <section id="account">
                <div id="welcome">
                    <h2>Bienvenue sur votre compte, <?= $infos['pseudo'] ?> !</h2>
                    <p>Adresse mail : <?= $infos['email'] ?></p>
                </div>
                <div class="accountComments">
                    <h2>Derniers commentaires :</h2>
                    <?php
                    foreach($comments as $comment) :
                ?>
                <!-- <p>
                    Dolor commodo fugiat minim eiusmod culpa fugiat sint incididunt irure exercitation pariatur. Labore deserunt duis veniam ut occaecat nostrud exercitation aute. Pariatur occaecat dolor culpa enim officia eiusmod dolor do incididunt consectetur. Lorem sit reprehenderit irure nostrud et sunt consequat aliquip elit laboris cillum dolor nulla ipsum. Elit eiusmod cillum incididunt et eu id in nulla incididunt duis duis dolor quis. Eiusmod in Lorem fugiat deserunt.
                </p> -->
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
        <main>
            <div id=noLogin>
                <h2>Vous devez d'abord créer un compte pour poster vos commentaires !</h2>
                <div class="backTop"> 
                    <a href="index.php?action=blog">Revenir à la page Blog</a>   
                </div>
            </div>
        </main>    
<?php endif ?>
<?php
require_once 'app/views/front/layouts/footer.php';
?>
