<?php

require_once 'app/views/back/layouts/headAdmin.php';
include_once 'app/views/back/layouts/headerAdmin.php';
?>

<nav id="navAdmin">
    <ul class="homeAdminMenu">
        <li>
            <a href="indexAdmin.php?action=loginAdmin">
                <i class="fa fa-home" aria-hidden="true"></i></a>
        </li>
        <li>
            <a href="indexAdmin.php?action=setArticle">Créer un post</a>
        </li>
        <li>
            <a href="indexAdmin.php?action=postsBack">Gérer les posts</a>
        </li>
        <li>
            <a href="indexAdmin.php?action=usersManagement">Gérer les utilisateurs</a>
        </li>
    </ul>
</nav>

<?php
    include_once 'app/views/back/layouts/footerAdmin.php';
?>