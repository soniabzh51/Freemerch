<?php

require_once 'app/views/front/layouts/head.php';
include_once 'app/views/front/layouts/header.php';
// include_once 'app/views/front/layouts/intro.php';
// include_once 'app/views/front/layouts/nav.php';

?>
    <section id="erreur404Content">
        <div id="erreur404">
            <h1> Oups ! <br> Erreur 404</h1>

            <p>
                Cette page n'existe pas ou n'existe plus.
            </p>
            <p>
                Nous vous prions de nous excuser pour la gêne occasionnée.<br/>
                Nous vous invitons à revenir à la<a href="index.php"> page d'accueil </a>de notre site.<br/>
            </p>
        </div>
    </section>
</main>
</div>

<?php
    include_once 'app/views/front/layouts/footer.php';
?>