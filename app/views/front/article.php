<?php
require_once 'app/views/front/layouts/head.php';
include_once 'app/views/front/layouts/header.php';
?>

<!--  CONTENT -->


    <section class="pageArticle">
        <div class="backTop">
            <a href="blog.php">< Revenir au Blog </a> 
        </div> 
        <div class="blogArticleContent">
            <div class="imgArticleContent">
                <img src="img/<?=$article['image']?>" title="<?= $article['title']?>">
            </div>
            <div class="postArticleContent">
                <P class="date">Posté le <time datetime=" ">20 octobre 2015 à 20:29<?=formatage_date($article['created_at']) ?></time></P>
                <h2><?= $article['title'] ?></h2>
                    <p class="articleP"><?= $article['content'] ?></p>
            </div>
            <div class="comments">
                <h2>Commentaires (<?= $nb ?>)</h2>

                <?php foreach($comments as $comment) : ?>

                <p class="date">Posté par <?= $comment['pseudo'] ?>, le :<time datetime="<?= $comment['created_at'] ?>"><?= formatage_date($comment['created_at']) ?></time> :</p>
                <p><?=$comment['content'] ?></p> 
                    
            <?php 
            endforeach; 
            if(isset($_SESSION['user'])) :
            ?>
            
                <form method="POST" action="">
                    <textarea name="comment" placeholder="Votre commentaire *"></textarea>
                    <input type="submit" value="Poster !">
                </form>

                <?php
                if(isset($error)) :
                    if($error) :
                ?>

                <div class="messageError">Error</div>

                <?php
                else :
                ?>

                <div class="messageConfirm">Votre commentaire a bien été posté !</div>

                <?php
                endif;
                endif
                ?>

            </div>
        </div>
        <div class="backBottom">
            <a href="app/views/front/blog.php">< Revenir au Blog </a> 
        </div> 
    </section> 
</main>

<?php
endif;
    include_once 'app/views/front/layouts/footer.php';
?>