<?php
function find_user_login_password(string $login,string $password):array{
    $users=json_to_array("users");
    foreach ($users as $user) {
    if( $user['login']==$login & $user['password']==$password)
    return $user;
    }
    return [];
    }

    function find_users(string $role):array{ 
        $users=json_to_array("users");
        $result=[];
        foreach ($users as $user){
            if($user['role']==$role)
                $result[]=$user;
            }
            return $result;
    }
    function insert_users($nom,$prenom,$login,$password){
        $data=array(
            'nom'=>$nom,
            'prenom'=>$prenom,
            'login'=>$login,
            'password'=>$password,
            'role'=>"ROLE_JOUEUR",
            'score'=>"0"
        );
        array_to_json("users",$data);
    }
    
    function insert_usersA($nom,$prenom,$login,$password){
        $data=array(
            'nom'=>$nom,
            'prenom'=>$prenom,
            'login'=>$login,
            'password'=>$password,
            'role'=>"ROLE_ADMIN",
            'score'=>"0"
        );
        array_to_json("users",$data);
    }
     
function test_email_unique(string $login){
    $users=json_to_array("users");
    foreach ($users as $user) 
    {
        if($user['login']==$login)
        {
           return true;
        } 
     
    }
    return false;
}