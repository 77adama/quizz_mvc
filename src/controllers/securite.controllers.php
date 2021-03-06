<?php
require_once(PATH_SRC."models".DIRECTORY_SEPARATOR."user.model.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
   if(isset($_REQUEST['action'])){
       if($_REQUEST['action']=="connexion"){
            $login=$_POST['login'];
            $password=$_POST['login'];
            connexion($login,$password);
       }
   }
}


if($_SERVER["REQUEST_METHOD"]=="GET"){
    if(isset($_REQUEST['action'])){
       if($_REQUEST['action']=="connexion"){  
        echo "charger la page de connexion";
         
       }else{
        require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."connexion.html.php");
       }
   }
}

function connexion(string $login, string $password):void{
    $errors=[];
    champ_obligatoire('login', $login,$errors,"login obligatoire");
    if(count($errors)==0){
        valid_email('login',$login,$errors);
    }
    champ_obligatoire('password',$password,$errors);
    if(count($errors)==0){
        //appel d'une fonction dun model
       $user= find_user_login_password($login,$password);
       if(count($user)!=0){
//utilisateur existe
        $_SESSION["user-connect"]=$user;
        //?controller=user&action=accueil
        header("location".WEB_ROOT."?controller=user&action=accueil");
        exit();
       }else{
//utilisateur n'existe pas
$errors['connexion']="Login ou Mot de passe Incorrect";
$_SESSION['errors']=$errors;
header("location".WEB_ROOT);
        exit(); 
       }
    }else{
        //Erreur de validation
        $_SESSION['errors']=$errors;
        header("location".WEB_ROOT);
        exit();
    }
}