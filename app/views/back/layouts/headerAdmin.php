<body>
    <div id="page">
        <header>
            <section id="homeAdminBanner">
                <div id="homeAdminTitle">
                    <h1>ADMINISTRATION</h1>
                </div>
                <div id="liensBlog">
                    <div id="lienCnx">
                        <div id="déconnexion">
                            <a href="">Déconnexion</a>
                        </div>
                    </div>
                    <!-- Modal Register-->
                    <div id="lienReg">
                        <div id="register">
                            <a href="#modal3" class="js-modal">Inscription</a>
                        </div>
                    </div>
                    <aside id="modal3" class="modal" aria-hidden="true" role="dialog" aria_labelledby="Login"
                        style="display: none;">
                        <div class="modal-wrapperReg js-modal-stop">
                            <div id="regForm">
                                <h2>Inscrivez-vous !</h2>
                                <form action="indexAdmin.php?action=homeAdmin" method="POST">
                                    <input type="text" name="pseudo" placeholder="Pseudo *" value="">
                                    <input type="text" name="email" placeholder="Adresse e-mail *" value="">
                                    <input type="text" name="emailconf" placeholder="Confirmation e-mail *" value="">
                                    <input type="password" name="password" placeholder="Mot de passe *">
                                    <input type="password" name="passwordconf"
                                        placeholder="Confirmation mot de passe *">
                                    <div class="messageError"><?= $error ?></div>
                                    <input type="submit" value="M'inscrire !">
                                </form>
                            </div>
                            <button class="js-modal-close">Fermer</button>
                        </div>
                    </aside>
                </div>
    </div>
    </section>

    <nav>
        <ul class="homeAdminMenu">
            <li>
                <a href="indexAdmin.php?action=homeAdmin" class="active">Créer un post</a>
            </li>
            <li>
                <a href="indexAdmin.php?action=posts">Gérer les posts</a>
            </li>
            <li>
                <a href="indexAdmin.php?action=usersManagement">Gérer les utilisateurs</a>
            </li>
        </ul>
    </nav>
    </header>