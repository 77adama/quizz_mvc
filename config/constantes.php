<?php


/**
* Chemin sur dossier racine du projet

*/

define("ROOT",str_replace("public".DIRECTORY_SEPARATOR."index.php","",$_SERVER['SCRIPT_FILENAME']));

/**
* Chemin sur dossier src qui contient les controllers et les modeles
*/
define("PATH_SRC",ROOT."src".DIRECTORY_SEPARATOR);
/**
* Chemin sur dossier templates du projet
*/
define("PATH_VIEWS",ROOT."templates".DIRECTORY_SEPARATOR);
/**
* Chemin sur data qui contient le fichier Json db.json
*/
define("PATH_DB",ROOT."data".DIRECTORY_SEPARATOR."db.json");
/**
* Chemin sur le dossier public , pour inclusion des images,css et js */
define("WEB_ROOT","http://localhost:8000/");

//constante pour les clés d'erreurs
define("KEY_ERRORS","errors");
//clés d'accé à l'utilisateur connecter
define("KEY_USER_CONNECT","user-connect");
define("WEB_PUBLIC",str_replace("index.php","",$_SERVER['SCRIPT_FILENAME']));