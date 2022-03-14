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
            $tmp_img_name=$_FILES['avatar']['tmp_name'];
            $folder = WEB_PUBLIC."uploads".DIRECTORY_SEPARATOR;
            move_uploaded_file($tmp_img_name,$folder.$img_name );
        }
     
    }
?>
<div class="inscri">
                 <div id="left">
                   <div id="text">
                        <h2 id="h2o">S'INSCRIRE</h2>
                        <h2 id="h2oc">Pour proposer des quizz</h2>
                    </div>
                    <div id="formulaire">
                            <form id="form" action="<?= WEB_ROOT?>" method="POST" enctype='multipart/form-data'>
                            <input type="hidden" name="controller" value="securite">
                            <input type="hidden" name="action" value="creer.admin">
                            <?php  if(isset($errors['emailExiste'])): ?>
                                <span style="color:red"> <?= $errors['emailExiste']; ?> </span>
                                <?php endif ?><br>
                            <?php if(isset($errors['prenom'])): ?>
                                <small style="color:red"> <?= $errors['prenom']; ?> </small>
                                <?php endif ?><br>
                            <div class="form-control1" class="control">
                                <label><b>PRENOM</b></label> </br>
                                <input id="prenom" type="text" placeholder="AAAAA" name="prenom" > </br>
                                <small class="small1">Error message</small>
                            </div>

                            <?php if(isset($errors['nom'])): ?>
                                <small style="color:red"> <?= $errors['nom']; ?> </small>
                                <?php endif ?><br>
                            <div class="form-control2" class="control">
                                <label><b>NOM</b></label></br>
                                <input id="nom" type="text" placeholder="BBBBB" name="nom" ></br>
                                <small>Error message</small>
                            </div>

                            <?php if(isset($errors['login'])): ?>
                                <small style="color:red"> <?= $errors['login']; ?> </small>
                                <?php endif ?><br>
                                
                            <div class="form-control3" class="control">
                                <label><b>LOGIN</b></label></br>
                                <input id="login" type="text" placeholder="abababab" name="login" ></br>
                                <small>Error message</small>
                            </div>

                            <?php if(isset($errors['password'])): ?>
                                <small style="color:red"> <?= $errors['password']; ?> </small>
                                <?php endif ?><br>
                            <div class="form-control4" class="control">
                                <label><b>PASSWORD</b></label></br>
                                <input id="password" type="password" placeholder="Password" name="password" ></br>
                                <small>Error message</small>
                            </div>

                            <?php if(isset($errors['confirmPassword'])): ?>
                                <small style="color:red"> <?= $errors['confirmPassword']; ?> </small>
                                <?php endif ?><br>
                            <div class="form-control5" id="form4" class="control">
                                <label><b>CONFIRM PASSWORD</b></label></br>
                                <input id="password2" type="password" placeholder="Confirm Password" name="confirmPassword" ></br>
                                <small>Error message</small>
                            </div>
                  
                            <input name="submit" type="submit" class="fot-btn2" value="créer compte">  
                    
                       
                    </div>
                    </div>
                    <div id="right">
                    <label for="avatar" id="uploadBtn">
                        <img id="photoo" src="<?=WEB_ROOT."img/avatar.jpg"?>" alt="">
                    </label>
                        <input type="file" id="avatar" name="avatar"  accept=".jpg, .jpeg, .png">
                        <h3 class="acc">Avatar Admin</h3>
        
                    </div>
                    </form>
                 </div>               
                