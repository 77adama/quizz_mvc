<?php
//$_REQUEST va contenir les donnes qui sont a la foi get ou post 
//verifier si la clé controller existe dans la request
if(isset($_REQUEST['controller']) ){
    switch ($_REQUEST['controller']) {
// verifie si cette clé est: securite
    case "securite" :
    require_once(PATH_SRC."controllers/securite.controllers.php");
    break;
    case "user" :
    require_once(PATH_SRC."controllers/user.controllers.php");
    break;
    case "question" :
    require_once(PATH_SRC."controllers/question.controllers.php");
    break;
    default:
    require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."pageErreur.html.php");
    }
    }else{
    require_once(PATH_SRC."controllers/securite.controllers.php");
    } 