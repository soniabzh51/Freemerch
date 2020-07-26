<?php

require_once 'app/views/back/layouts/headAdmin.php';
include_once 'app/views/back/layouts/headerArticleAdmin.php';

?>

        <nav id="navAdmin">
            <ul class="homeAdminMenu">
                <li>
                    <a href="indexAdmin.php?action=loginAdmin">
                        <i class="fa fa-home" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="indexAdmin.php?action=setArticle">Créer un post</a>
                </li>
                <li>
                    <a href="indexAdmin.php?action=postsBack">Gérer les posts</a>
                </li>
            </ul>
        </nav>

        <!--  CONTENT -->

        <main>
            <section class="pageArticle">
                <article class="blogAdminArticleContent">
                    <div class="imgArticleContent">
                        <img src="app/public/images/<?= $article['image'] ?>" alt="<?= $article['image'] ?>">
                    </div>
                    <div class="postArticleContent">
                        <!-- <p class="date">Posté le <time datetime="2020-07-12 15:40">12 juillet 2020 à 15:40<?=formatage_date($post_article['created_at']) ?></time> par <?= $post_article['pseudo'] ?></p> -->
                        <h2><?= $article['title'] ?></h2>
                        <p class="articleP"><?= $article['content'] ?></p>
                    </div>
                </article>

                <!-- <div class="comments">
                    <h2>Commentaires</h2>
                    <p class="date">Posté par  le : </p>
                    <form method="POST" action="">
                        <textarea name="comment" placeholder="Votre commentaire *"> </textarea>                            <input type="submit" value="Valider !" class="brownBtn">
                    </form>
                    <div class="messageError">Error</div>
                    <div class="messageConfirm">Modification / Suppression validée !</div>
                </div> -->
            <!-- </section>
        </main> -->

<?php
include_once 'app/views/back/layouts/footerAdmin.php';
?>