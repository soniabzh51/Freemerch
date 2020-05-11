<?php

require_once 'app/views/back/layouts/headAdmin.php';
include_once 'app/views/back/layouts/headerAdmin.php';

?>
        <!--  CONTENT -->

        <main>
            <div id="usersManagementSearchBar">
                <form method="POST" action="usersManagementAdmin.php">
                    <input type="text" name="query" placeholder="Rechercher un utilisateur...">
                    <div id="menuUsersManagement">
                        <nav id="menuUsersTri">
                            <ul>
                                <li class="sousMenuUsersTri"><a href="#">Trier par :</a>
                                    <ul class="usersTri">
                                        <li><a href="#">Id</a></li>
                                        <li><a href="#">pseudo</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <input type="submit" value="Go !" class="brownBtn">
                </form>
            </div>
            <div id="showUser">
                    <p>User id : ?</p>
                    <p>User pseudo : Zorro</p>
            </div>
            <div id="deleteUser">
                <input type="submit"value="Supprimer le compte !"> 
            </div>
        </main>

<?php
    include_once 'app/views/back/layouts/footerAdmin.php';
?>