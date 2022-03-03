<?php
require_once(PATH_SRC."models".DIRECTORY_SEPARATOR."user.model.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){
   if(isset($_REQUEST['action'])){
       if($_REQUEST['action']=="connexion"){
        echo "traiter lme formulaire de connexion";
       }
   }
}


if($_SERVER["REQUEST_METHOD"]=="GET"){
    if(isset($_REQUEST['action'])){
        if(!is_connect()){
            header("location:".WEB_ROOT);
            exit();
        }
       if($_REQUEST['action']=="accueil"){  
           require_once(PATH_VIEWS."user". DIRECTORY_SEPARATOR."accueil.html.php");
        }elseif ($_REQUEST['action']=="liste.joueur") {
            
           $data = lister_joueur();
       // require_once(PATH_VIEWS."user". DIRECTORY_SEPARATOR."liste.joueur.html.php");
          
       }
   }
}

function lister_joueur() {
    //appel du modèle
    ob_start();
    $data= find_users(ROLE_JOUEUR);
    require_once(PATH_VIEWS."user". DIRECTORY_SEPARATOR."liste.joueur.html.php");
    $content_for_views=ob_get_clean();
    require_once(PATH_VIEWS."user". DIRECTORY_SEPARATOR."accueil.html.php");

}