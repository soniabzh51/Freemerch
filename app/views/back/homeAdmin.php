<?php

require_once 'app/views/back/layouts/headAdmin.php';
include_once 'app/views/back/layouts/headerAdmin.php';
if(!empty($_POST)) {
    $errors = post_article();
}
?>

        <main>
            <section id="homeAdminPost">
                <h2>Poster un article !</h2>
                <form action="" method="POST" enctype="multipart/form-data">

                <?php
                if(isset($errors)):
                    if($errors):
                        foreach($errors as $error):
                ?>
                    <div class="messageError"><?= $error ?></div>

                    <?php
                    endforeach;
                else:
                    ?>
                    <div class="messageConfirm">Le post a bien été créé !</div>

                    <?php
                endif;
                endif
                ?>
                    <div class="formInput">
                    <input type="text" name="titre" placeholder="Titre *"value="<?php if(isset($_POST['titre'])) echo $_POST['titre'] ?>"> 
                    </div>
                    <input type="file" name="file">
                    <textarea name="contenu"
                        placeholder="Corps de l'article *"><?php if(isset($_POST['contenu'])) echo $_POST['contenu'] ?></textarea>
                    <input type="submit" value="Poster !" class="brownBtn">
                </form>
            </section>
        </main>

<?php
    include_once 'app/views/back/layouts/footerAdmin.php';
?>