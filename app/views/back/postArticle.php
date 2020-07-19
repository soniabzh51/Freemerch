<?php

require_once 'app/views/back/layouts/headAdmin.php';
include_once 'app/views/back/layouts/headerAdmin.php';
// if(!empty($_POST)) {
//     $errors = postArticleBack();
// }
?>

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