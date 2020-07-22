<?php

require_once 'app/views/back/layouts/headAdmin.php';
include_once 'app/views/back/layouts/headerArticleAdmin.php';

?>

<!--  CONTENT -->

<main>
    <section id="pageModifyArticle">
        <h2>Modifiez un article</h2>

        <form id='modifyForm' action="" method="POST" enctype="multipart/form-data">
            <textarea name="modifyTitle" placeholder="Titre"
                value="<?php if(isset($_POST['title'])) echo $_POST['title'] ?>"><?= $articleBack['title'] ?></textarea>
            <textarea name="modifyContent" id="modifyContent" placeholder="Corps de l'article"
                value="<?php if(isset($_POST['content'])) echo $_POST['content'] ?>"><?= $articleBack['content'] ?></textarea>
            <input type="submit" value="Poster !" class="brownBtn">
        </form>
    </section>
</main>




<?php
include_once 'app/views/back/layouts/footerAdmin.php';
?>