<body>
    <div id="page">

        <!-- HEADER -->
        <header>
            <section id="homeAdminBanner">
                <div id="homeAdminTitle">
                    <h1>ADMINISTRATION</h1>
                </div>
                <div id="liensBlog">
                    <!-- Modal Connexion-->
                    <div id="lienCnx">
                        <div id="déconnexion">
                            <a href="blog.html">Déconnexion</a>
                        </div>
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
                                    <form action="" method="POST">
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
            </section>
            <nav id="articleAdminMenu">
                <ul>
                    <li class="sousMenuArticleAdmin">
                        <a href="#" class="active">Modifier </a>
                        <ul class="actionArticleAdmin">
                            <li><a href="#">Image</a></li>
                            <li><a href="#">Date</a></li>
                            <li><a href="#">Titre</a></li>
                            <li><a href="#">Contenu</a></li>
                            <li><a href="#">Commentaire(s)</a></li>
                        </ul>
                    </li>
                    <li class="sousMenuArticleAdmin">
                        <a href="#">Supprimer </a>
                        <ul class="actionArticleAdmin">
                            <li><a href="#">Article</a></li>
                            <li><a href="#">Commentaire(s)</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>
