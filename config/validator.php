<?php
function champ_obligatoire(string $key,string $data,array &$errors,string $message="ce champ est obligatoire"){
if(empty($data)){
$errors[$key]=$message;
}
}
function valid_email(string $key,string $data,array &$errors,string $message="email invalid"){
if(!filter_var($data,FILTER_VALIDATE_EMAIL)){
$errors[$key]=$message;
}
}
function valid_password(string $key,string $data,array &$errors,string $message="password invalid"){
    $lettres = preg_match('/[a-zA-Z]/',$data);
    $nombre = preg_match('/[0-9]/',$data );
    if (strlen($data)<6 || !$nombre || !$lettres){
        $errors[$key]=$message;
    }
}  