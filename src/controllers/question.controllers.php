<?php
require_once(PATH_SRC."models".DIRECTORY_SEPARATOR."question.model.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
   if(isset($_REQUEST['action'])){
       if($_REQUEST['action']=="creer.question"){
            $question= $_POST['question'];
            $nbrPoints=$_POST['nbrPoints'];
            $input=$_POST['reponses'];
            $typeRep=$_POST['select'];
            $cor=$_POST['check'];
            foreach($input as $index=>$input){
                $reponses[$index]=$input;
            }
            switch($typeRep){
                case 'champDeTexte':
                    $correct[]=$_POST['reponses'];
                break;
                case 'checkboxValue':
                    foreach ($cor as $index => $cor) {
                        $correct[$index]=$cor;
                    }
                break;
                case 'radioValue':
                   $correct[]=$_POST['check'];
                break;
                default:
                header("location:".WEB_ROOT."?controller=question&action=creer.question");
                break;
            }
            
            insert_question($question, $nbrPoints, $reponses, $correct);
            header("location:".WEB_ROOT."?controller=question&action=creer.question");
            exit();
        }
   }
}


if($_SERVER["REQUEST_METHOD"]=="GET"){
    if(isset($_REQUEST['action'])){
        if($_REQUEST['action']=="creer.question"){
            creer_question();
        }elseif($_REQUEST['action']=="liste.question"){
            liste_question();
        }
    }
 }

 function creer_question(){
    ob_start();
    require_once(PATH_VIEWS."question". DIRECTORY_SEPARATOR."creer.question.html.php");
    $content_for_views=ob_get_clean();
    require_once(PATH_VIEWS."user". DIRECTORY_SEPARATOR."accueil.html.php");
}

function liste_question(){
    ob_start();
    $data = json_to_array("questions");
    $page = (!empty($_GET['page']) && $_GET['page'] > 0) ? intval($_GET['page']) : 1;
    $limit = (!empty($_GET['limit']) && $_GET['limit'] > 0) ? intval($_GET['limit']) : 3;
    $totalPages = ceil(count($data) / $limit);
    $page = max($page, 1);
    $page = min($page, $totalPages);
    $offset = ($page - 1) * $limit;
    $offset = ($offset < 0) ? 0 : $offset;
    $items = array_slice($data, $offset, $limit);
    require_once(PATH_VIEWS."question". DIRECTORY_SEPARATOR."liste.question.html.php");
    $content_for_views=ob_get_clean();
    require_once(PATH_VIEWS."user". DIRECTORY_SEPARATOR."accueil.html.php");
}



// require_once(PATH_SRC."models".DIRECTORY_SEPARATOR."question.model.php");
// if($_SERVER["REQUEST_METHOD"]=="POST"){
//    if(isset($_REQUEST['action'])){
//        if($_REQUEST['action']=="creer.question"){
//             $question= $_POST['question'];
//             $nbrPoints=$_POST['nbrPoints'];
//             $input=$_POST['reponses']; 
//             $typeRep=$_POST['select'];
//             $cor =$_POST['check'];
//             foreach($input as $index=>$input){
//                 $reponses[$index]=$input;
//             }
//             switch($typeRep){
//  //forEach() permet d'exécuter une fonction donnée sur chaque élément du tableau.
//                 case 'champDeTexte':
//                     $correct[]=$_POST['reponses'];
                   
//                 break;

//                 case 'checkboxValue':
//                     foreach($cor as $index=>$cor){
//                         $correct[$index]=$cor;
//                     }
//                 break;

//                 case'radioValue':
//                         $correct[]=$_POST['check'];
//                 break;
//             } 
//             insert_question($question, $nbrPoints, $reponses ,$correct); 
//             // insert_question($question, $nbrPoints, $reponses ,$correct); 
//             header("location:".WEB_ROOT."?controller=question&action=creer.question");
//             exit();
//         } 
//    }
// }


// if($_SERVER["REQUEST_METHOD"]=="GET"){
//     if(isset($_REQUEST['action'])){
//         if($_REQUEST['action']=="creer.question"){
//             creer_question();
//         }
//     }
//  }

//  function creer_question(){
//     ob_start();
//     require_once(PATH_VIEWS."question". DIRECTORY_SEPARATOR."creer.question.html.php");
//     $content_for_views=ob_get_clean();
//     require_once(PATH_VIEWS."user". DIRECTORY_SEPARATOR."accueil.html.php");
// }