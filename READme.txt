================ Pour vérifier si le service est lancé (optionnel) ================

Le serveur mariadb est déjà lancer automatiquement, pour s'en assurer
 -> bar de recherche windows
 -> taper service 
 -> chercher Mysql 
et normalement vous verez son status en automatique ce qui signifie que le service démarre dés que votre
pc est allumé. (optinel) -> simplement pour vérifier.

================= Pour ce connecter à Mariadb =====================

Pour pouvoir s'y connecter aller

 -> Bar de recherche windows
 -> Taper Windows Terminal
 -> ensuite taper ceci `mariadb -u root` et appuyez sur entré
    vous devriez vous connectez en tant qu'utilisateur root à mariadb

Alternative PhpMyAdmin 

 -> Bar de recherche windows
 -> Taper Windows Terminal
 -> Sur le terminal taper phpmy et faite tabulation (la touche qui ce trouve en haut à gauche qui a des flêches des sens opposé)
    Sinon taper le nom complètement `phpmyadmin.exe`
 -> Vous devriez voir ceci "PHP 8.3.6 Development Server (http://localhost:3333) started"
    faite un ctrl + clique gauche sur le lien pour l'ouvrir sur votre navigateur


=============== UPDATE COMMAND mariadb TERMINAL =================

-> Connecter vous sur mariadb
-> taper ceci pour update une image d'un produit
        `UPDATE product SET img = 'toto' WHERE id = 1`
    Dans l'exemple l'id peut être n'importe quelle id
    du momement qu'elle correspond à un product dans la 
    base de donnée.
-> Sinon phpMyAdmin si vous vous sentez pas trop d'humeur à utiliser des requêtes SQL