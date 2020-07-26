# freemerch

![Screenshot website](./.github/image/screenshotfreemerch.png)

## Codeclimate

[![Maintainability](https://api.codeclimate.com/v1/badges/e2028f61a225ec867f94/maintainability)](https://codeclimate.com/github/soniabzh51/freemerch/maintainability)


### Introduction


freemerch est un projet qui à terme, servira de site vitrine pour un freelance-merchandiser.
Il est destiné à un large public, allant du simple particulier (Home Staging) ainsi qu'aux professionnels (type commerçants) mais aussi aux entreprises et groupes commerciaux plus importants qui souhaitent former leurs équipes.
En l'état actuel du projet, vous touverez :

 . un espace dédié aux News composé de quelques articles, un espace Blog sur lequel vous pouvez vous inscrire, un formulaire de contact pour les visiteurs ne souhaitant pas s'inscrire sur le Blog;

 . un espace Admin.

 Par la suite, ce projet sera enrichi par d'autres fonctionnaliés telles que le partage sur les réseaux sociaux, la prise de rendez-vous en ligne...
 Les pages Portfolio et A Propos sont en cours de réalisation, ainsi que les services proposés.
 Enfin, le Blog ainsi que l'Admin seront plus développés. 

 ### Nom du projet

 freemerch

 ### Technologies utilisées

 * Visual Studio Code,
 * HTML 5,
 * CSS 3,
 * JavaScript,
 * JQuery,
 * API REST 'adresse.data.gouv',
 * PHP,
 * SQL.

 ### Installation du projet

 1. Cloner le dépot en vous rendant à l'adresse suivante : 

  https://github.com/soniabzh51/freemerch 

  et cliquez sur le bouton vert "Code".

2. Si composer n'est pas installé sur votre ordinateur, allez à la racine du dossier sur votre terminal et lancez la commande :

composer install

3. Importez le fichier   sql -> [DataBase](app/public/sql/freemerch.sql)     
dans votre phpMyAdmin (ou autre application de gestion de base de données).

Vous y trouverez aussi le schéma de la base de données   schéma -> [DB_diagram](app/public/sql/DB_diagram.png)  

ATTENTION :

Si vous changez le nom de la base de données, vous devrez le changer aussi dans le fichier Manager.php.

4. Ouvrez phpMyAdmin puis sur votre navigateur, entrez 'localhost' :

5. Pour acceder à l'Admin entrez : indexAdmin.php?action=loginAdmin
Puis vous pourrez soit vous inscrire,
soit vous connecter avec les identifiants suivants :

Pseudo : yza56
Mot de passe : yza56freemerch

Vous pouvez également voir le site à l'adresse : (https://freemerch.fr/)           

### Auteure 

REVEREND Sonia CP6
