<?php

require_once 'app/views/back/layouts/headAdmin.php';
// include_once 'app/views/back/layouts/headerArticleAdmin.php';

?>

<!--  CONTENT -->

<main>
    <section id="pageModifyArticle">
        <h2>Modifiez un article</h2>

        <form id='modifyForm' action="indexAdmin.php?adminModifyArticle&id=<?=$articleBack['id'] ?>" method="POST" enctype="multipart/form-data">
        <div class="formInput">
            <textarea id="titleArea" name="modifyitle" placeholder="Nouveau titre"
                value="<?php if(isset($_POST['title'])) echo $_POST['title'] ?>" required></textarea>
            <textarea id="contentArea" name="modifyContent" id="modifyContent" placeholder="Nouveau contenu de l'article"
                value="<?php if(isset($_POST['content'])) echo $_POST['content'] ?>" required></textarea>
            <input type="submit" value="Poster !" class="brownBtn">
        </form>
    </section>
</main>




<?php
include_once 'app/views/back/layouts/footerAdmin.php';
?>