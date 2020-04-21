<!DOCTYPE html>
<html lang="fr">

<head>
    <!------------------- Required meta tags ---------------->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freelance merchandiser</title>
    <meta name="keywords"
        content="merchandiser, retail design, scénographie, merchandising global, agencement vitrines, formation ">
    <meta name="description"
        content="Ce que je peux vous apporter : techniques de présentation, élaboration et réalisation de vitrine, mise en place signalétique, analyse du comportement client, accompagnement des magasins en affiliation et franchisés, recrutement, formation, accompagnement des équipes, préparation et animation de reunions. Une expertise merchandising qui saura booster votre entreprise !">

    <!------------------------ css --------------------------->
    <link rel="stylesheet" href="public/css/style.css">
    <!----------------------- fonts -------------------------->
    <link href="https://fonts.googleapis.com/css?family=Alex+Brush&display=swap" rel="stylesheet">
</head>

<body>
    <div id="page">

        <!-- HEADER -->

        <header>
            <section class="banner">
                <div class="logo">
                    <a href="home" id="big"><img src="public/logos/logo_IP_style.png" alt="Bienvenue chez IPstyle" ></a>
                    <a href="home" id="small"><img src="public/logos/logo_IP_mini.png" alt="Bienvenue chez IPstyle" ></a>
                </div>
                <div class="title">
                    <h1>Isabelle Phelippot</h1>
                    <p>Freelance Merchandiser</p>
                </div>
            </section>
        </header>

        <!--  CONTENT -->

        <!-- svg -->
        <section id="intro">
            <!-- right arrow -->
            <div id="svg1">
                <svg>
                    <path d="M 50,12 L 1115,12" />
                    <path d="M 1135,12 L 1115,4 L 1115,20 Z" />
                </svg>
            </div>

            <div id="strategy">
                <p>Définissons ensemble votre <strong>meilleure stratégie</strong> merchandising <br> et offrez à vos
                    clients leur plus <strong>belle expérience</strong> shopping</p>
            </div>
            <!-- left arrow -->
            <div id="svg2">
                <svg>
                    <path d="M 70,12 L 940,12" />
                    <path d="M 50,12 L 70,20 L 70,4 Z" />
                </svg>
            </div>

        </section>
        <!-- end svg -->

        <main id="main">

            <!-- menu -->
            <nav id="mainMenu">
                <input type="checkbox" id="menuMobile" role="button">
                <label for="menuMobile" class="menuMobile">
                    <img src="public/logos/menu.png" alt="Menu mobile IP style">
                </label>
                <ul class="menu">
                    <li>
                        <a href="#" class="active">
                            <div class="menuContent">
                                <h2 class="menuTitle">ACCUEIL</h2>
                                <h3 class="menuSubtitle">Bonjour et bienvenue chez vous</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="menuContent">
                                <h2 class="menuTitle">A PROPOS</h2>
                                <h3 class="menuSubtitle">Découvrez qui je suis...</h3>
                            </div>
                        </a>
                    </li>
                    <li id="merch">
                        <div id="menuMerch">
                            <div class="menuContent">
                                <h2 class="menuTitle">MERCHANDISING</h2>
                                <h3 class="menuSubtitle">Vitrines et magasin seront vos meilleurs atouts</h3>
                            </div>
                        </div>
                    </li>
                    <ul class="menu2">
                        <li class="subMenu3">
                            <a href="#" class="menuTitle2">Visuel merchandising</a>
                        </li>
                        <li class="subMenu3">
                            <a href="#" class="menuTitle2">Vitrine</a>
                        </li>
                    </ul>
                    <li id="tools">
                        <div id="menuTools">
                            <div class="menuContent">
                                <h2 class="menuTitle">OUTILS MERCHANDISING</h2>
                                <h3 class="menuSubtitle">Des préconisations personnalisées...</h3>
                            </div>
                        </div>
                    </li>
                    <ul class="menu2">
                        <!-- <li class="subMenu4">
                            <a href="#" class="menuTitle2"></a>
                        </li> -->
                        <li class="subMenu4">
                            <a href="#" class="menuTitle2">Bookmerchandising</a>
                        </li>
                    </ul>
                    <li id="training">
                        <a href="#">
                            <div class="menuContent">
                                <h2 class="menuTitle">FORMATION</h2>
                                <h3 class="menuSubtitle">Une équipe performante est gage de réussite</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="menuContent">
                                <h2 class="menuTitle">PORTFOLIO</h2>
                                <h3 class="menuSubtitle">Toutes mes réalisations...</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="menuContent">
                                <h2 class="menuTitle">BLOG</h2>
                                <h3 class="menuSubtitle">Le meilleur du merchandising</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="menuContent">
                                <h2 class="menuTitle">CONTACT</h2>
                                <h3 class="menuSubtitle">Je serai ravie de vous aider...</h3>
                            </div>
                        </a>
                    </li>
                </ul>
            </nav>
            <section id="mainContent">

                <!-- Slider JS 1-->
                <section id="slide" class="sliderJs">
                    <div id="slider">
                        <img src="public/images/slide_1.jpg" alt="Espace femme - GEMO" id="slide2">
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
                            <a href="#modal1" class="js-modal">mon CV,</a> ou téléchargez-le en
                            <a href="public/images/cvIsabelle_Phelippot.pdf" target="_blank">version pdf.</a>
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
                    <div id="articles">
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
                                    <strong>Yousra Guille,</strong>
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
                                    <strong>Elise Ménager Durand,</strong>
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
                                    <strong>Céline Verand,<br>Directrice commerciale</strong>.
                                </p> 
                            </div>
                        </article>
                    </div>
                </section>
            </section>
        </main>

        <!-- FOOTER -->
        <footer>
            <!-- <section id="carousel">
                <p>CAROUSEL</p>
            </section> -->
            <section id="footerContent">
                <figure id="footerImage">
                    <img src="public/images/isa.jpg" alt="Photo Isabelle Phelippot">
                </figure>
                <div id="blocContact">
                    <div id="findMe">
                        <p><strong>IP Style</strong></p>
                        <img src="public/logos/tel.svg" alt="logo tel mobile" id="svgTel">
                        <p> 06 12 81 00 25</p>

                        <img src="public/logos/location.svg" alt="logo localisation adresse" id="svgLocation">
                        <p> 19 rue du Verger <br>
                            56340 Carnac
                        </p>
                        <img src="public/logos/mail.svg" alt="logo mail" id="svgMail">
                        <p><a href="mailto:ipstylemerchandiser@gmail.com"> ipstylemerchandiser@gmail.com</a></p>
                    </div>
                    <div id="links">
                        <div id="bubble">
                            <img src="public/logos/bulle.svg" alt="logo bulle">
                            <p>
                                Ce que j'aime, <br>
                                Ce qui m'inspire,<br>
                                Ce qui me passionne,<br>
                                Ce que je partage.
                            </p>

                        </div>
                        <div id="socialNetworks">
                            <a href="https://www.facebook.com/isabelle.phelippot.1" target="_blank"><img
                                    src="public/logos/facebook3d.png" alt="logo facebook 3D" id="fb3d"></a>
                            <a href="https://www.instagram.com/ipstylemerchandiser" target="_blank"><img
                                    src="public/logos/instagram.png" alt="logo instagram" id="insta"></a>
                            <a href="https://www.linkedin.com/in/isabelle-phelippot-6924aa13b" target="_blank"><img
                                    src="public/logos/linkedin.png" alt="logo linkedin"></a>
                            <a href="https://www.pinterest.com/ipstylemerchandiser" target="_blank"><img
                                    src="public/logos/pinterest.png" alt="logo pinterest" id="pint"></a>
                        </div>
                    </div>
                </div>
            </section>
            <section id="infosSitemap">
                <p>@Copyright 2020 IP Style - RGPD - Mentions Légales - Sitemap</p>
            </section>
            <div id="backOnTop"> 
                <a href="#top"><img src="public/logos/top.png" alt="Retour haut de page" /></a> 
            </div>
        </footer>
        <!-- End footer -->
    </div>
    <!-- End page -->

    <!-- Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script type="text/javascript" src="public/scripts/app.js"></script>
</body>

</html>