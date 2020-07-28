<?php

require_once 'app/views/front/layouts/head.php';
include_once 'app/views/front/layouts/header.php';
include_once 'app/views/front/layouts/nav.php';

?>

    <section id="blogContent">
       
        <div id="blogTitle">
            <h2>Bienvenue sur votre blog !</h2>
        </div>
            <div id="blogBanner">
                <!-- Modal Connexion-->
                <div id="lienCnx">
                    <div id="connexion">
                        <a href="#modal2" class="js-modal">Connexion</a>
                    </div>
                    <aside id="modal2" class="modal" aria-hidden="true" role="dialog" aria_labelledby="Login"
                        style="display: none;">
                        <div class="modal-wrapperCnx js-modal-stop">
                            <div id="cnxForm">
                                <h2>Connectez-vous !</h2>
                                <form action="userCnc" method="POST">
                                    <input type="text" name="pseudo" placeholder="Pseudo *" value="<?php if (isset($_POST['pseudo'])) echo $_POST['pseudo'] ?>" required>
                                    <input type="password" name="password" placeholder="Mot de passe *" value="<?php if(isset($_POST['password'])) echo $_POST['password'] ?>" required>

                                <?php
                                if(isset($error)) :
                                ?> 

                                    <div class="messageError"><?= $error ?></div>

                                <?php
                                endif
                                ?>
                                
                                    <input type="submit" value="Me connecter !">
                                </form>
                            </div>
                            <button class="js-modal-close">Fermer</button>
                        </div>
                    </aside>
                </div>
                <!-- Modal Register-->
                <div id="lienReg">
                    <div id="register">
                        <a href="#modal3" class="js-modal">Inscription</a>
                    </div>
                    <aside id="modal3" class="modal" aria-hidden="true" role="dialog" aria_labelledby="Login"
                        style="display: none;">
                        <div class="modal-wrapperReg js-modal-stop">
                            <div id="regForm">
                                <h2>Inscrivez-vous !</h2>
                                <form method="POST" action="userReg" >
                                    <input type="text" name="pseudo" placeholder="Pseudo *" value="<?php if(isset($_POST['pseudo'])) echo $_POST['pseudo'] ?>" required>
                                    <input type="text" name="email" placeholder="Adresse e-mail *" value="<?php if(isset($_POST['email'])) echo $_POST['email'] ?>" required>
                                    <input type="text" name="emailConf" placeholder="Confirmation e-mail *" required>
                                    <input type="password" name="password" placeholder="Mot de passe *" required>
                                    <input type="password" name="passwordConf" placeholder="Confirmation mot de passe *" required>

                                <?php
                                if(isset($errors)) :
                                if($errors) :
                                foreach($errors as $error) :
                                ?>
    
                                    <div class="messageError"><?= $error ?></div>

                                <?php
                                endforeach;
                                else :
                                ?>

                                    <p>Votre inscription est confirmée !</p>
                                
                                <?php
                                endif;
                                endif
                                ?>
                                   
                                    <input type="submit" value="M'inscrire !">
                                </form>
                            </div>
                            <button class="js-modal-close">Fermer</button>
                        </div>
                    </aside>
                </div>
            </div>
        
        <div id="introBlog">
            <p>
            Vous souhaitez poster des commentaires sur vos articles préférés ? <br>
            Inscrivez-vous, connectez-vous !
            </p>
        </div>

        <div id="articles">

        </div>
    </section>
</main>


<?php
    include_once 'app/views/front/layouts/footer.php';
?>