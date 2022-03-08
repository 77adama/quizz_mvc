<?php
require_once(PATH_SRC."models".DIRECTORY_SEPARATOR."user.model.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){
   if(isset($_REQUEST['action'])){
       if($_REQUEST['action']=="connexion"){
        echo "traiter le formulaire de connexion";
       }elseif ($_REQUEST['action']=="inscription") {
          $nom=$_POST['nom'];
          $prenom=$_POST['prenom'];
          $login=$_POST['login'];
          $password=$_POST['password'];
          $confirmPassword=$_POST['confirmPassword'];
          
          inscription($nom, $prenom, $login, $password, $confirmPassword);
          if(test_email_unique($login)==false){
            insert_users($nom, $prenom, $login, $password);
            echo "<p style='position:absolute;color:green;font-size:30px;margin-left:10%'>inscription reussie!!<p>";
            require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."inscription.html.php");
          }
          else{
            $errors['emailExiste']="L email existe deja";
            $_SESSION[KEY_ERRORS]=$errors;
            header("location:".WEB_ROOT."?controller=securite&action=inscription");
            exit();
          }
       }
   }
}


if($_SERVER["REQUEST_METHOD"]=="GET"){
    if(isset($_REQUEST['action'])){
        if(!is_connect()){
            header("location:".PATH_VIEWS);
            exit();
        }
       if($_REQUEST['action']=="accueil"){  
           require_once(PATH_VIEWS."user". DIRECTORY_SEPARATOR."accueil.html.php");
        }elseif ($_REQUEST['action']=="liste.joueur") {
            
           $data = lister_joueur();
       // require_once(PATH_VIEWS."user". DIRECTORY_SEPARATOR."liste.joueur.html.php");
          
       }
    //    elseif($_REQUEST['action']=="creeradmin"){
    //        $data= creer_admin();
           
    //    }
   }
   else{
    require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."pageErreur.html.php");

 }
}

function lister_joueur() {
    //appel du modèle
    ob_start();
    $data = find_users(ROLE_JOUEUR);
    //intval Retourne la valeur numérique entière équivalente d'une variable
    $page = (!empty($_GET['page']) && $_GET['page'] > 0) ? intval($_GET['page']) : 1;
    //définir le nombre de lignes à afficher par page, et récupérer le total de page qu'on aura
    $limit = 6;
    //ceil Arrondit au nombre supérieur
    $totalPages = ceil(count($data) / $limit);
    //sécuriser" notre pagination pour pas que quelqu'un change l'URL
    $page = max($page, 1);
    $page = min($page, $totalPages);
    // offset => indice ou il va commencer a afficher
    $offset = ($page - 1) * $limit;
    $offset = ($offset < 0) ? 0 : $offset;
    //array_slice  Extrait une portion de tableau
    $items = array_slice($data, $offset, $limit);
    require_once(PATH_VIEWS."user". DIRECTORY_SEPARATOR."liste.joueur.html.php");
    $content_for_views=ob_get_clean();
    require_once(PATH_VIEWS."user". DIRECTORY_SEPARATOR."accueil.html.php");

}



function inscription(string $nom ,string $prenom,  string $login, string $password, string $confirmPassword):void{
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
        header("location:".WEB_ROOT."?controller=securite&action=inscription");
        exit();
    }

}
