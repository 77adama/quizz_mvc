<?php
function find_user_login_password(string $login,string $password):array{
    $users=json_to_array("users");
    foreach ($users as $user) {
    if( $user['login']==$login & $user['password']==$password)
    return $user;
    }
    return [];
    }
        //on lui donne on role et il return un tableau
    function find_users(string $role):array{ 
        //recuper tous les utilisateurs se trouvant dans le fichier json
        $users=json_to_array("users");
        $result=[];
        //parcourir et on cherche les utilisateurs dont le role est egale au role q'on a definit 
        foreach ($users as $user){
            if($user['role']==$role)
                $result[]=$user;
            }
            return $result;
    }
    function insert_users($nom,$prenom,$login,$password,$avatar){
        //permer d'inserer
        $data=array(
            'nom'=>$nom,
            'prenom'=>$prenom,
            'login'=>$login,
            'password'=>$password,
            'role'=>"ROLE_JOUEUR",
            'score'=>"0",
            'avatar'=>$avatar
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