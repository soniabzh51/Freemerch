<?php

require_once 'app/views/back/layouts/headAdmin.php';
include_once 'app/views/back/layouts/headerAdmin.php';

?>

<main>
    <div id="postsSearchBar">
        <form method="POST" action="postsAdmin.php">
            <input type="text" name="query" placeholder="Rechercher un article...">
            <div id="menuPosts">
                <nav id="menuTri">
                    <ul class="orderBy">
                        <li class="sousMenuTri"><a href="#">Trier par :</a>
                            <ul class="tri">
                                <li><a href="#">Id</a></li>
                                <li><a href="#">Titre</a></li>
                                <li><a href="#">Date</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            <input type="submit" value="Go !" class="brownBtn">
        </form>
    </div>
    <div>
        
    </div>
</main>
</div>

<?php
    include_once 'app/views/back/layouts/footerAdmin.php';
?>