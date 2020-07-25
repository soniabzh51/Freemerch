<?php

require_once 'app/views/back/layouts/headAdmin.php';
include_once 'app/views/back/layouts/headerAdmin.php';

?>
<section id="spaceAdmin">
    <div id="lienAdminCnx">
        <!-- Modal connexion -->
        <div id=cnxAdmin>
            <a href="#modal4" class="js-modal">Connexion</a>
        </div>
        <aside id="modal4" class="modal" aria-hidden="true" role="dialog" aria_labelledby="Login"
            style="display: none;">
            <div class="modal-wrapperCnx js-modal-stop">
                <div id="cnxForm">
                    <h2>Connectez-vous !</h2>
                    <form action="indexAdmin.php?action=adminCnc" method="POST">
                        <input type="text" name="pseudo" placeholder="Pseudo *"
                            value="<?php if(isset($_POST['pseudo'])) echo $_POST['pseudo'] ?>" required>
                        <input type="password" name="password" placeholder="Mot de passe *" required>
                        <input type="submit" value="Me connecter !">
                    </form>
                </div>
                <button class="js-modal-close">Fermer</button>
            </div>
        </aside>
    </div>
    <div id="disconnectAdmin">
        <a href="indexAdmin.php?action=adminDcn">Déconnexion</a>
    </div>
    <div id="lienAdminReg">
        <div id="regAdmin">
            <a href="#modal5" class="js-modal">Inscription</a>
        </div>
        <!-- Modal Register-->
        <aside id="modal5" class="modal" aria-hidden="true" role="dialog" aria_labelledby="Login"
            style="display: none;">
            <div class="modal-wrapperReg js-modal-stop">
                <div id="regForm">
                    <h2>Inscrivez-vous !</h2>
                    <form method="POST" action="indexAdmin.php?action=adminReg">
                        <input type="text" name="pseudo" placeholder="Pseudo *"
                            value="<?php if(isset($_POST['pseudo']))echo $_POST['pseudo'] ?>" required>
                        <input type="text" name="email" placeholder="Adresse e-mail *"
                            value="<?php if(isset($_POST['email']))echo $_POST['email'] ?>" required>
                        <input type="text" name="emailConf" placeholder="Confirmation e-mail *" required>
                        <input type="password" name="password" placeholder="Mot de passe *" required>
                        <input type="password" name="passwordConf" placeholder="Confirmation mot de passe *" required>
                        <input type="submit" value="M'inscrire !">
                    </form>
                </div>
                <button class="js-modal-close">Fermer</button>
            </div>
        </aside>
    </div>
</section>

<?php
include_once 'app/views/back/layouts/footerAdmin.php';
?>