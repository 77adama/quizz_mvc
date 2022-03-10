<?php
require_once(PATH_SRC."models".DIRECTORY_SEPARATOR."question.model.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
   if(isset($_REQUEST['action'])){
       if($_REQUEST['action']=="creer.question"){
            $question= $_POST['question'];
            $nbrPoints=$_POST['nbrPoints'];
            $input=$_POST['reponses'];
            foreach($input as $index=>$input){
                $reponses[$index]=$input;
            }
            insert_question($question, $nbrPoints, $reponses);
            header("location:".WEB_ROOT."?controller=question&action=creer.question");
            exit();
        }
   }
}


if($_SERVER["REQUEST_METHOD"]=="GET"){
    if(isset($_REQUEST['action'])){
        if($_REQUEST['action']=="creer.question"){
            creer_question();
        }
    }
 }

 function creer_question(){
    ob_start();
    require_once(PATH_VIEWS."question". DIRECTORY_SEPARATOR."creer.question.html.php");
    $content_for_views=ob_get_clean();
    require_once(PATH_VIEWS."user". DIRECTORY_SEPARATOR."accueil.html.php");
}