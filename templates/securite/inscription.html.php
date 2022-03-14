
<?php 
if(isset($_SESSION[KEY_ERRORS])){
    $errors=$_SESSION[KEY_ERRORS];
    unset($_SESSION[KEY_ERRORS]);
   }
?>
<?php
    if (isset($_POST['submit'])){
        if(array_key_exists('avatar', $_FILES)){
            $img_name=$_FILES['avatar']['name'];
            $extension = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
            $nam= str_replace("@gmail.com","",$login);
            $name = $nam."_JOUEUR";
            $tmp_img_name=$_FILES['avatar']['tmp_name'];
            $folder = WEB_PUBLIC."uploads".DIRECTORY_SEPARATOR;
            move_uploaded_file($tmp_img_name,$folder.$name.".".$extension);
        }
     
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>inscription</title>
        <link rel="stylesheet" href="<?= WEB_ROOT."css".DIRECTORY_SEPARATOR."style.inscription.css" ?>" media="screen" type="text/css" />
    </head>
    <body>
       <div id="entete">
           <img class="imgg" src="<?=WEB_ROOT."img/logonav.png"?>" alt="">
            <h1>Le plaisir de jouer</h1>
        </div>
        <div id="main">
            <div id="container">
               <div id="left">
                    <div id="text">
                        <h2>S'INSCRIRE</h2>
                        <h2 id="h2oc">Pour tester votre niveau de culture générale</h2>
                    </div>
                    <div id="formulaire">
                            <form id="form" action="<?= WEB_ROOT?>" method="POST" enctype='multipart/form-data'>
                                <input type="hidden" name="controller" value="user">
                                <input type="hidden" name="action" value="inscription">
                                <?php if(isset($errors['prenom'])): ?>
                                    <small style="color:red"> <?= $errors['prenom']; ?> </small>
                                    <?php endif ?><br>
                                <div class="form-control">
                                    <label><b>PRENOM</b></label> 
                                    <input id="prenom" type="text" placeholder="AAAAA" name="prenom" >
                                    <small>Error message</small>
                                </div>

                                <?php if(isset($errors['nom'])): ?>
                                    <small style="color:red"> <?= $errors['nom']; ?> </small>
                                    <?php endif ?><br>
                                <div class="form-control">
                                    <label><b>NOM</b></label>
                                    <input id="nom" type="text" placeholder="BBBBB" name="nom" >
                                    <small>Error message</small>
                                </div>

                                <?php if(isset($errors['login'])): ?>
                                    <small style="color:red"> <?= $errors['login']; ?> </small>
                                    <?php endif ?><br>
                                    
                                    <?php  if(isset($errors['emailExiste'])): ?>
                                    <small style="color:red"> <?= $errors['emailExiste']; ?> </small>
                                    <?php endif ?><br>
                                <div class="form-control">
                                    <label><b>LOGIN</b></label>
                                    <input id="login" type="text" placeholder="abababab" name="login" >
                                    <small>Error message</small>
                                </div>

                                <?php if(isset($errors['password'])): ?>
                                    <small style="color:red"> <?= $errors['password']; ?> </small>
                                    <?php endif ?><br>
                                <div class="form-control">
                                    <label><b>PASSWORD</b></label>
                                    <input id="password" type="password" placeholder="Password" name="password" >
                                    <small>Error message</small>
                                </div>

                                <?php if(isset($errors['confirmPassword'])): ?>
                                    <small style="color:red"> <?= $errors['confirmPassword']; ?> </small>
                                    <?php endif ?><br>
                                <div class="form-control">
                                    <label><b>CONFIRM PASSWORD</b></label>
                                    <input id="password2" type="password" placeholder="Confirm Password" name="confirmPassword" >
                                    <small>Error message</small>
                                </div>
                                
                                <input value="creer un compte" name="submit" type="submit" class="fot-btn2"> 
                                <a class="ac" href="<?=WEB_ROOT?>">se connecter</a>
                        
                        </div>
                </div>
                <div id="right">
                    <label for="avatar" id="uploadBtn">
                        <img id="photo" src="<?=WEB_ROOT."img/avatar.jpg"?>" alt="">
                    </label>
                        <input type="file" id="avatar" name="avatar"  accept=".jpg, .jpeg, .png">
                        <h3>Avatar du joueur</h3>
                </div>
                 </form>
            </div>
        </div>
        <script src="<?= WEB_ROOT."js/script.inscription.js" ?>"></script>
    </body>
</html>
