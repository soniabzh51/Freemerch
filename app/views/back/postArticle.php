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

        <main>
            <section id="homeAdminPost">
                <h2>Poster un article !</h2>
                <form action="indexAdmin.php?action=AdminPostArticle" method="POST" enctype="multipart/form-data">
                    <div class="formInput">
                    <input type="text" name="title" id="title" placeholder="Titre" value="<?php if (isset($_POST['title'])) echo $_POST['title'] ?>"> 
                    </div>
                    <input type="file" name="image" id="image">
                    <textarea name="content" id="content" placeholder="Corps de l'article" value="<?php if (isset($_POST['content'])) echo $_POST['content'] ?>"></textarea>
                    <input type="submit" value="Poster !" class="brownBtn">
                </form>
            </section>
        </main>

<?php
    include_once 'app/views/back/layouts/footerAdmin.php';
?>