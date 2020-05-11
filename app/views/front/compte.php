<?php

require_once 'app/views/front/layouts/head.php';

?>

<body>
    <div id="page">

        <!-- HEADER -->

        <header>
            <section class="banner">
                <div class="logo">
                    <a href="home" id="big"><img src="public/logos/logo_IP_style.png" alt="Bienvenue chez IPstyle"></a>
                    <a href="home" id="small"><img src="public/logos/logo_IP_mini.png" alt="Bienvenue chez IPstyle"></a>
                </div>
                <div class="title">
                    <h1>Isabelle Phelippot</h1>
                    <p>Freelance Merchandiser</p>
                </div>
            </section>
        </header>

        <!--  CONTENT -->
        <main>

            <div id="blogBanner">
                <div id="blogTitle">
                    <h2>BLOG</h2>
                </div>
                <div id="liensBlog">
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
                                    <form action="index.php?action=compte" method="POST">
                                        <input type="text" name="pseudo" placeholder="Pseudo *" value="">
                                        <input type="password" name="password" placeholder="Mot de passe *">
                                        <div class="messageError">Error</div>
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
                                    <form action="index.php?action=compte" method="POST">
                                        <input type="text" name="pseudo" placeholder="Pseudo *" value="">
                                        <input type="text" name="email" placeholder="Adresse e-mail *" value="">
                                        <input type="text" name="emailConf" placeholder="Confirmation e-mail *"
                                            value="">
                                        <input type="password" name="password" placeholder="Mot de passe *">
                                        <input type="password" name="passwordConf"
                                            placeholder="Confirmation mot de passe *">
                                        <div class="messageError">Error</div>
                                        <input type="submit" value="M'inscrire !">
                                    </form>
                                </div>
                                <button class="js-modal-close">Fermer</button>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
            <section id="account">
                <div class="backTop">    
                    <a href="index.php?action=blog">< Revenir à la page News/Blog</a>
                </div>
                <div id="welcome">
                    <h2>Bienvenue <?= $infos['pseudo'] ?>Zorro !</h2>
                    <p>Adresse mail : <?= $infos['email'] ?></p>
                </div>
                <div class="accountComments">
                    <h2>Derniers commentaires :</h2>
                    <?php
                    foreach($comments as $comment) :
                ?>
                <p>
                    Dolor commodo fugiat minim eiusmod culpa fugiat sint incididunt irure exercitation pariatur. Labore deserunt duis veniam ut occaecat nostrud exercitation aute. Pariatur occaecat dolor culpa enim officia eiusmod dolor do incididunt consectetur. Lorem sit reprehenderit irure nostrud et sunt consequat aliquip elit laboris cillum dolor nulla ipsum. Elit eiusmod cillum incididunt et eu id in nulla incididunt duis duis dolor quis. Eiusmod in Lorem fugiat deserunt.
                </p>
                    <!-- <p class="date">Posté le <time datetime="<?= $comment['created_at'] ?>"><?= formatage_date($comments['created_at']) ?></time>
                sur l'article <?= $comment['title'] ?></p>
                <p><?= $comment['content'] ?></p> -->

                    <?php
                    endforeach
                ?>
                    <!-- <p class="date">Posté par<?= $user['pseudo']?> le <time datetime=""></time> :</p> -->
                </div>
            </section>
        </main>

        <?php

require_once 'app/views/front/layouts/footer.php';

?>
