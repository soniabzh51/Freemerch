<?php

require_once 'app/views/front/layouts/head.php';
include_once 'app/views/front/layouts/header.php';
include_once 'app/views/front/layouts/nav.php';

?>

<section id="contactContent">
    <div id="introContact">
        <h2>Bienvenue sur la page contact !</h2>
        <p>Vous souhaitez nous écrire ? Envoyez votre message directement à l'administrateur !</p>
    </div>
    <div id="contactForm">
        <form id="formContact"method="POST" action="">

        <?php
            if(isset($errors)) :
                if($errors):
            foreach($errors as $error) :
        ?>
        <?= $error ?>
        <?php endforeach; else : ?>
        <p>votre message a bien été envoyé !</p>
        <?php endif; endif ?>

            <fieldset id="civilities">
                <legend>Vos coordonées</legend>
                <div id="infos">
                    <p>
                        <label for="name">Votre nom</label>
                        <input type="text" name="name" id="name" placeholder="Tapez votre nom" value="<?php if(isset($_POST['name'])) {
                            echo $_POST['name'];
                        } ?>" required>
                        <span id="clearName"></span>
                    </p>
                    <p>
                        <label for="firstName">Votre prénom</label>
                        <input type="text" name="firstName" id="firstName" placeholder="Tapez votre prénom" value="<?php if (isset($_POST['firstName'])) {
                            echo $_POST['firstName'];
                        } ?>" required>
                        <span id="clearFirstName"></span>
                    </p>
                    <p>
                        <label for="mail">Votre email</label>
                        <input type="email" name="email" id="email" placeholder="Tapez votre e-mail" value="<?php if(isset($_POST['email'])) {
                            echo $_POST['email'];
                        } ?>" required>
                        <span id="clearEmail"></span>
                    </p>
                </div>
                <div id="adresse">
                    <p>
                        <label for="adresse">Votre adresse</label>
                        <textarea name="address" id="address" placeholder="Votre adresse" rows="5" cols="" value="<?php if(isset($_POST['address'])){
                            echo $_POST['address'];
                        } ?>" onkeyup="getAddress()" required>
                        </textarea>
                        <ul id="foundAddress"></ul>
                        <span id="clearAddress"></span>
                    </p>
                </div>
            </fieldset>
            <fieldset id="yourMessage">
                <legend>Votre message</legend>
                <p>
                    <label for="objet">Objet</label>
                    <input type="text" name="subject" id="subject" placeholder="Objet de votre message" value="<?php if(isset($_POST['subject'])) {
                        echo $_POST['subject'];
                    } ?>"required>
                </p>
                <p>
                    <label for="message">Votre message</label>
                    <textarea name="message" id="message" placeholder="Votre message" rows="10" cols="" value="<?php if(isset($_POST['message'])) {
                        echo $_POST['message'];
                    } ?>" required>
                    </textarea>
                </p>
            </fieldset>
            <p class="buttons">
                 <input id="send"type="submit" value="Envoyer">
                <input type="reset" value="Annuler">
            </p>
        </form>
    </div>


    <div id="plan">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2687.9201977217913!2d-2.7750476492653675!3d47.64711757908518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48101c1e45bf9d89%3A0xf1b4ec0fcc4d768d!2s20%20Rue%20Winston%20Churchill%2C%2056000%20Vannes!5e0!3m2!1sfr!2sfr!4v1573737540240!5m2!1sfr!2sfr"
            width="825" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
</section>
</main>

<?php
    include_once 'app/views/front/layouts/footer.php';
?>