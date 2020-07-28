<?php

require_once 'app/views/front/layouts/head.php';
include_once 'app/views/front/layouts/header.php';
include_once 'app/views/front/layouts/intro.php';
include_once 'app/views/front/layouts/nav.php';

?>

<!--  CONTENT -->

<section id="newsContent">
    <div id="articles">
        <div class="newsFront">
        
            <?php foreach ($articlesNews as $articleNews): ?>

            <article class="newsArticles">
                <h2 class="articleTitle"><?= $articleNews['title'] ?></h2>
                <img src="<?= $articleNews['image'] ?>" alt="<?= $articleNews['image'] ?>" class="articleImg">
                <p class="date">Posté par <?=$articleNews['pseudo'] ?></p>
                <!-- <p class="articleExtract"><?= $articleNews['extract'] ?>...</p> -->
                <p class="articleContent"><?= $articleNews['content'] ?></p>
                <!-- <a href="index.php?action=fullArticle" target="_blank">Lire l'article ></a> -->
                <!-- <a href="article1.html">Lire l'article</a> -->
            </article>

            <?php endforeach ; ?>

        </div>

    </div>
</section>
</main>


<?php
include_once 'app/views/front/layouts/footer.php';
?>