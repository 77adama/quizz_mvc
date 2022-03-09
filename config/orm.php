<?php
///Recuperation des donnees du fichier
function json_to_array(string $key):array{
$dataJson=file_get_contents(PATH_DB);
$data=json_decode($dataJson,true);
return $data[$key];
}
// fonction qui return tous
function json_to_array_all():array{
    $dataJson=file_get_contents(PATH_DB);
    $data=json_decode($dataJson,true);
    return $data;
}
//Enregistrement et Mis a jour des donnees du fichier
function array_to_json(string $key,array $data){
    //on utilise la fonction pour recuperer ce qui est dans le json et le transformer en tableau
    $tab=json_to_array_all();
    
    //on concatene le tableau $data 
    $tab[$key][]=$data;
    $dataJson=json_encode($tab,JSON_PRETTY_PRINT);
    
    file_put_contents(PATH_DB, $dataJson);
}