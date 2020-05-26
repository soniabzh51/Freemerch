<?php

require_once 'app/views/back/layouts/headAdmin.php';
include_once 'app/views/back/layouts/headerArticleAdmin.php';

?>

        <!--  CONTENT -->

        <main>
            <section class="pageArticle">
                <div class="blogAdminArticleContent">
                    <div class="imgArticleContent">
                        <img src="img/<?= $article['image'] ?>" alt="<?= $article['image'] ?>"id="">
                    </div>
                    <div class="postArticleContent">
                        <P class="date">Posté le <time datetime="<?= $article['created_at'] ?>"></P>
                        <h2 <?= $article['title'] ?>></h2>
                        <p class="articleP"><?= $article['content'] ?></p>
                    </div>
                    <!-- <div class="comments">
                        <h2>Commentaires</h2>
                        <p class="date">Posté par  le : </p>
                        <form method="POST" action="">
                            <textarea name="comment" placeholder="Votre commentaire *"> </textarea>
                            <input type="submit" value="Valider !" class="brownBtn">
                        </form>
                        <div class="messageError">Error</div>
                        <div class="messageConfirm">Modification / Suppression validée !</div>
                    </div> -->
                </div>
            </section>
        </main>


<?php
include_once 'app/views/back/layouts/footerAdmin.php';
?>
