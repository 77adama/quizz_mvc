<?php
require_once(PATH_SRC."models".DIRECTORY_SEPARATOR."user.model.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
   if(isset($_REQUEST['action'])){
       if($_REQUEST['action']=="connexion"){
         
            $login=$_POST['login'];
            $password=$_POST['password'];
            //die('ok');
            
            connexion($login,$password);
           

            
       }elseif($_REQUEST['action']=="creer.admin"){
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $login=$_POST['login'];
        $password=$_POST['password'];
        $confirmPassword=$_POST['confirmPassword'];
        creerAdmin($nom, $prenom, $login, $password,$confirmPassword);
        if(test_email_unique($login)==false){
            insert_usersA($nom, $prenom, $login, $password);
            header("location:".WEB_ROOT."?controller=securite&action=creer.admin");
            exit();
        }else{
            $errors['emailExiste']="L email existe deja";
            $_SESSION[KEY_ERRORS]=$errors;
            header("location:".WEB_ROOT."?controller=securite&action=creer.admin");
            exit();

        }
         
       }
   }
}


if($_SERVER["REQUEST_METHOD"]=="GET"){
    if(isset($_REQUEST['action'])){
       if($_REQUEST['action']=="connexion"){  
        require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."connexion.html.php");
         
       }elseif ($_REQUEST['action']=="deconnexion") {
          logout();
       }elseif($_REQUEST['action']=="inscription"){
        require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."inscription.html.php");

     }elseif($_REQUEST['action']=="creer.admin"){
        $data= creer_admin();
        require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."creer.admin.html.php");
    }
     else{
        require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."pageErreur.html.php");

     }

   }else{
    require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."connexion.html.php");
        
}
}

function connexion(string $login, string $password):void{

    $errors=[];
    champ_obligatoire('login', $login,$errors,"Ce champ est obligatoire");
    if(count($errors)==0){
        valid_email('login',$login,$errors);
    }
    
    champ_obligatoire('password',$password,$errors, "ce champ est obligatoire");
    if(count($errors)==0){
        //appel d'une fonction dun model
       $user= find_user_login_password($login,$password);
       
       if(count($user)!=0){
            //utilisateur existe
            $_SESSION[KEY_USER_CONNECT]=$user;
            header("location:".WEB_ROOT."?controller=user&action=accueil");     
            exit();
       }else{
            //utilisateur n'existe pas
            $errors['connexion']="Login ou Mot de passe Incorrect";
            $_SESSION[KEY_ERRORS]=$errors;
            header("location:".WEB_ROOT);
            exit(); 
       }
    }else{
        //Erreur de validation
        $_SESSION[KEY_ERRORS]=$errors;
        header("location:".WEB_ROOT);
        exit();
    }
}
function logout(){
    session_destroy();
    header("location:".WEB_ROOT);
    exit();
}

function creer_admin(){
        ob_start();
    // $data= find_users(ROLE_ADMIN);
    require_once(PATH_VIEWS."securite". DIRECTORY_SEPARATOR."creer.admin.html.php");
    $content_for_views=ob_get_clean();
    require_once(PATH_VIEWS."user". DIRECTORY_SEPARATOR."accueil.html.php");

}
function creerAdmin(string $nom ,string $prenom,  string $login, string $password, string $confirmPassword):void{
    $errors=[];
    champ_obligatoire('nom', $nom,$errors,"Ce champ est obligatoire");
    champ_obligatoire('prenom', $prenom,$errors,"Ce champ est obligatoire");
    champ_obligatoire('confirmPassword', $confirmPassword,$errors,"Ce champ est obligatoire");
    champ_obligatoire('login', $login,$errors,"Ce champ est obligatoire");
    champ_obligatoire('password', $password,$errors,"Ce champ est obligatoire");
    if(count($errors)==0){
        valid_email('login',$login,$errors);
        valid_password('login',$password,$errors);
        

    }else{
        $_SESSION[KEY_ERRORS]=$errors;
        header("location:".WEB_ROOT."?controller=securite&action=creer.admin");
        exit();
    }

}