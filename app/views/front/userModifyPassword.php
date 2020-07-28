<?php

require_once 'app/views/front/layouts/head.php';
require_once 'app/views/front/layouts/header.php';
if (!empty($_POST)) {
    $login = new \Project\controllers\ControllerFront();
    $error = $login->changePassword();
}

?>
<!--  CONTENT -->
<main>
    <section id="modifyPasswordBtn">
        <div class="backTop">
            <a href="blog">Revenir à la page Blog</a>
        </div>
    </section>
    <section id="modifyPassword">
        <form id="changePassword" action="" method='POST' name="changePassword">
            <label for="password">Mot de passe actuel :</label>
            <input type="password" name="password" id="actualPassword" placeholder="Entrez votre mot de passe actuel"
                required>
            <label for="newPassword">Nouveau mot de passe :</label>
            <input type="password" name="newPassword" id="newPassword" placeholder="Entrez votre nouveau mot de passe"
                required>
            <label for="newPasswordConf">Confirmation mot de passe :</label>
            <input type="password" name="newPasswordConf" id="newPasswordConf"
                placeholder="Confirmez votre nouveau mot de passe">
            <div id="validNewPasswordOrNot">
                <input type="submit" value="Valider">
            </div>
        </form>

    </section>
</main>

<?php
    include_once 'app/views/front/layouts/footer.php';
?>