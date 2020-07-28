<?php

require_once 'app/views/front/layouts/head.php';
include_once 'app/views/front/layouts/header.php';
include_once 'app/views/front/layouts/intro.php';
include_once 'app/views/front/layouts/nav.php';

?>

    <section id="mainContent">

        <!-- Slider JS 1-->
        <section id="slide" class="sliderJs">
            <div id="slider">
                <img src="app/public/images/slide_1.jpg" alt="Espace femme - GEMO" id="slide2">
                <div id="preview" onclick="changeSlide(1)">
                    <</div> <div id="next" onclick="changeSlide(1)">>
                </div>
            </div>
        </section>
        <!-- End slider JS -->

        <!-- Content1 -->
        <section id="content1">
            <h2>Je vous accompagne sur toutes les étapes...</h2>
            <article id="coaching">
                <div>
                    <p>
                        Je vous accompagne sur <strong>votre stratégie merchandising </strong>et vous propose
                        mes services <strong>de la conception à la réalisation</strong> :
                    </p>
                    <p>
                        ✓ <strong>Valorisez votre image </strong>à travers un merchandising de qualité et faites
                        profiter vos clients d’une belle <strong>expérience shopping</strong>.
                    </p>
                    <p>
                        ✓ <strong>Séduisez</strong> vos clients dès leur passage devant vos
                        <strong>vitrines</strong>.
                    </p>
                </div>
                <div>
                    <p>
                        Vous avez un service merchandising et marketing ? <br>
                        Je serai ravie de collaborer avec vos équipes !
                    </p>
                    <p>
                        La <strong>formation</strong> est aussi un formidable outil de <strong>développement
                            professionnel</strong> pour vos équipes. Formatrice en merchandising, je serais
                        heureuse de <strong>partager mes connaissances</strong> et donner du sens au mot
                        <strong>commercialité</strong> auprès de vos équipes.
                    </p>
                </div>
            </article>

            <!-- Modal -->
            <div id="lien_cvJs">
                <div id="cv">
                    Et si la curiosité vous pousse un peu plus, jetez un œuil à
                    <a href="" class="js-modal">mon CV,</a> ou téléchargez-le en
                    <a href="">version pdf.</a>
                </div>
                <aside id="modal1" class="modal" aria-hidden="true" role="dialog" aria_labelledby="Login"
                    style="display: none;">
                    <div class="modal-wrapper js-modal-stop">
                        <button class="js-modal-close">Fermer</button>
                    </div>
                </aside>
        </section>
        <!-- content2 -->
        <section id="content2">
            <h2>Ils m'on fait confiance...</h2>
            <div id="trustArticles">
                <article class="trust">
                    <div class="more">
                        «Isabelle est une personne... <br> <strong>Lire la suite</strong>
                    </div>
                    <div class="ref">
                        <p> très professionnelle, efficace, stratégique et constructive.</p>
                        <p>
                            J'ai eu le plaisir de pouvoir collaborer avec elle sur plusieurs projets et grâce à
                            ses
                            compétences, ils furent tous menés à bien.»
                        </p>
                        <p>
                            <strong>Valérie Xxxxxx,</strong>
                        </p>
                        <p>
                            <strong>Chef de secteur chez Marionnaud</strong>.
                        </p>
                    </div>
                </article>
                <article class="trust">
                    <div class="more">
                        «Isabelle a cet instinct... <br><strong>Lire la suite</strong>
                    </div>
                    <div class="ref">
                        <p>qui lui permet d'imaginer le meilleur parcours client pour
                            n'importe quelle enseigne.
                        </p>
                        <p>Sa créativité et sa bonne humeur contagieuse en fait un excellent
                            élément au sein d'une équipe pour booster les ventes et la relation client. <br> Une
                            pépite
                            !»
                        </p>
                        <p>
                            <strong>Marie Xxxxx-Xxxxxx,</strong>
                        </p>
                        <p>
                            <strong>Chargée de Communication Transition énergétique et
                                Alimentaire Nantes Métropole</strong>.
                        </p>
                    </div>
                </article>
                <article class="trust">
                    <div class="more">
                        «Isabelle a toujours... <br><strong>Lire la suite</strong>
                    </div>
                    <div class="ref">
                        <p>fourni un travail de qualité en merchandising, que ce soit dans
                            l'élaboration des préconisations notes merchandising ou dans la réalisation sur le
                            terrain.
                        </p>
                        <p>
                            Elle fait preuve de pédagogie pour que les équipes assimilent au mieux les
                            informations transmises. Sa connaissance du terrain et la considération qu'elle a
                            pour
                            les équipes sont des atouts précieux dans la réalisation de sa mission.
                        </p>
                        <p>
                            Son esprit d’équipe et sa bonne humeur font le reste. Je la recommande vivement si
                            vous
                            avez besoin
                            d'une
                            personne opérationnelle et créative, idéale pour donner de l’énergie et des idées !»
                        </p>
                        <p>
                            <strong>Cécile Xxxxxx,<br>Directrice commerciale</strong>.
                        </p> 
                    </div>
                </article>
            </div>
        </section>
    </section>
</main>
</div>


<?php
    include_once 'app/views/front/layouts/homeFooter.php';
?>