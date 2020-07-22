<?php

require_once 'app/views/front/layouts/head.php';
include_once 'app/views/front/layouts/header.php';
include_once 'app/views/front/layouts/intro.php';
include_once 'app/views/front/layouts/nav.php';

?>

<!--  CONTENT -->

<section id="newsContent">
    <div id="newsSearchBar">
        <form method="POST" action="">
            <input type="text" name="query" placeholder="Rechercher un article...">
            <input type="submit" value="Go !">
        </form>
    </div>

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
        <!-- <div class="rows">
            <article class="newsArticles">
                <img src="public/images/blogStaggy.jpg" alt="">
                <P class="date">
                    "Posté le "
                    <time></time>
                </P>
                <h2>bla bla</h2>
                <p>        
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <a href="article2.html">Lire l'article ></a> -->
        <!-- <a href="article.php?id=2">Lire l'article</a> -->
        <!-- </article>
        </div>
        <div class="rows">
            <article class="newsArticles">
                <img src="public/images/blogEram.jpg" alt="">
                <P class="date">
                    "Posté le "
                    <time></time>
                </P>
                <h2></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <a href="article3.html">Lire l'article ></a>  -->
        <!-- <a href="article.php?id=3">Lire l'article</a> -->
        <!-- </article>
        </div>
        <div class="rows">
            <article class="newsArticles">
                <img src="public/images/blogGemo.jpg" alt="">
                <P class="date">
                    "Posté le "
                    <time></time>
                </P>
                <h2></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <a href="article1.html">Lire l'article ></a> -->
        <!-- <a href="article.php?id=4">Lire l'article</a> -->
        <!-- </article>
        </div> -->

    </div>
</section>
</main>


<?php
include_once 'app/views/front/layouts/footer.php';
?>