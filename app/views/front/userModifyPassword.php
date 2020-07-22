<?php

require_once 'app/views/front/layouts/head.php';
require_once 'app/views/front/layouts/header.php';
// if (!empty($_POST)) {
//     $login = new \Projet\controllers\ControllerFront();
//     $error = $login->modifyPassword();
// }

?>
<!--  CONTENT -->
<main>
    <div class="backTop">
        <a href="index.php?action=blog">Revenir à la page Blog</a>
    </div> 

    <section id="modifyPassword">
        <form id="changePassword" action="index.php?action=modifyPassword" method='POST' name="changePassword">
            <label for="password">Mot de passe actuel :</label>
            <input type="password" name="password" id="actualPassword" placeholder="Entrez votre mot de passe actuel" required>
            <label for="newPassword">Nouveau mot de passe :</label>
            <input type="password" name="newPassword" id="newPassword" placeholder="Entrez votre nouveau mot de passe" required>
            <label for="newPasswordConf">Confirmation mot de passe :</label>
            <input type="password" name="newPasswordConf" id="newPasswordConf"
                placeholder="Confirmez votre nouveau mot de passe">
            <div id="validNewPasswordOrNot">
                <input type="submit" class="brownBtn" value="Valider">
                <div class="brownBtn">
                    <a href="index.php?action=backAccount">Annuler</a>
                 </div>
            </div>
        </form>

    </section>
    </main>

<?php
    include_once 'app/views/front/layouts/footer.php';
?>