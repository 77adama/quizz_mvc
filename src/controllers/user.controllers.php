<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
   if(isset($_REQUEST['action'])){
       if($_REQUEST['action']=="connexion"){
        echo "traiter lme formulaire de connexion";
       }
   }
}


if($_SERVER["REQUEST_METHOD"]=="GET"){
    if(isset($_REQUEST['action'])){
       if($_REQUEST['action']=="accueil"){  
        require_once(PATH_VIEWS."user". DIRECTORY_SEPARATOR."accueil.html.php");
       }
   }
}else {
    echo "charger la page de connexion";
}
