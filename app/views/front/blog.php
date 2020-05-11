<?php

require_once 'app/views/front/layouts/head.php';
include_once 'app/views/front/layouts/header.php';
include_once 'app/viewsfront/layouts/intro.php';
include_once 'app/views/front/layouts/nav.php';

?>

    <section id="blogContent">
        <div id="blogBanner">
            <div id="blogTitle">
                <h2>NEWS/BLOG</h2>
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
                                    <input type="text" name="pseudo" placeholder="Pseudo *" value="<?php if(isset($_POST['pseudo'])) echo $_POST['pseudo'] ?>">
                                    <input type="password" name="password" placeholder="Mot de passe *">

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
                                <form action="index.php?action=compte" method="POST">
                                    <input type="text" name="pseudo" placeholder="Pseudo *" value="<?php if(isset($_POST['pseudo'])) echo $_POST['pseudo'] ?>">
                                    <input type="text" name="email" placeholder="Adresse e-mail *" value="<?php if(isset($_POST['email'])) echo $_POST['email'] ?>">
                                    <input type="text" name="emailConf" placeholder="Confirmation e-mail *" value="<?php if(isset($_POST['emailconf'])) echo $_POST['emailconf'] ?>">
                                    <input type="password" name="password" placeholder="Mot de passe *">
                                    <input type="password" name="passwordConf" placeholder="Confirmation mot de passe *">

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
        </div>
        <div id="blogSearchBar">
            <form method="POST" action="blog.php">
                <input type="text" name="query" placeholder="Rechercher un article..." value="<?php if(isset($_POST['query'])) echo $_POST['query'] ?>">
                <input type="submit" value="Go !">
            </form>
        </div>

        <?php
        if(isset($_POST['query'])):
        ?>
        <div>
            <h1>Résultat de votre recherche : " <?= $_POST['query'] ?> " </h1>
        </div>

        <?php
        endif
        ?>

        <div id="articles">

        <?php 
        foreach($articles as $article) : ?>

            <div class="rows">
                <article class="blogArticles">
                    <img src="img/<?=$article['image']?>" alt="">
                    <P class="date">Posté le <time datetime" "><?=formatage_date($article['created_at']) ?></time></P>
                    <h2><?=$article['title'] ?></h2>
                    <p><?= $article['extract'] ?></p>
                    <a href="article.php?id=<?= $article['id'] ?>">Lire l'article ></a>
                </article>
            </div>

        <?php endforeach ?>

        </div>
    </section>
</main>


<?php
    include_once 'app/views/front/layouts/footer.php';
?>