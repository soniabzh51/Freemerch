<?php

require_once 'app/views/back/layouts/headAdmin.php';
include_once 'app/views/back/layouts/headerAdmin.php';

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

<main id="pagePosts">
    <section id="posts">
        <h2> Liste de tous vos articles :</h2>

        <?php foreach ($articlesBack as $articleBack): ?>

        <div class="articlesBack">
            <h3><?= $articleBack['title'] ?></h3>
            <p><?= $articleBack['extract'] ?></p>
            <p><?= $articleBack['content'] ?></p>
            <p>Posté par : <?= $articleBack['pseudo'] ?></p>
        </div>
        <div class="modif_sup">
            <div class="brownBtn">
            <a href="indexAdmin.php?action=deleteArticle&id=<?=$articleBack['id'] ?>">Supprimer !</a>
            </div>
        </div>

        <?php endforeach ; ?>

    </section>
</main>
</div>


<?php
    include_once 'app/views/back/layouts/footerAdmin.php';
?>