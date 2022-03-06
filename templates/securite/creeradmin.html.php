<div class="inscri">
                 <div id="left">
                   <div id="text">
                        <h2>S'INSCRIRE</h2>
                        <h2 id="h2oc">Pour proposer des quizz</h2>
                    </div>
                    <div id="formulaire">
                            <form id="form" action="<?= WEB_ROOT?>" method="POST">
                            <input type="hidden" name="controller" value="user">
                            <input type="hidden" name="action" value="inscriptionA">
                            <?php if(isset($errors['prenom'])): ?>
                                <small style="color:red"> <?= $errors['prenom']; ?> </small>
                                <?php endif ?><br>
                            <div class="form-control1">
                                <label><b>PRENOM</b></label> </br>
                                <input id="prenom" type="text" placeholder="AAAAA" name="prenom" > </br>
                                <small class="small1">Error message</small>
                            </div>

                            <?php if(isset($errors['nom'])): ?>
                                <small style="color:red"> <?= $errors['nom']; ?> </small>
                                <?php endif ?><br>
                            <div class="form-control2">
                                <label><b>NOM</b></label></br>
                                <input id="nom" type="text" placeholder="BBBBB" name="nom" ></br>
                                <small>Error message</small>
                            </div>

                            <?php if(isset($errors['login'])): ?>
                                <small style="color:red"> <?= $errors['login']; ?> </small>
                                <?php endif ?><br>
                            <div class="form-control3">
                                <label><b>LOGIN</b></label></br>
                                <input id="login" type="text" placeholder="abababab" name="login" ></br>
                                <small>Error message</small>
                            </div>

                            <?php if(isset($errors['password'])): ?>
                                <small style="color:red"> <?= $errors['password']; ?> </small>
                                <?php endif ?><br>
                            <div class="form-control4">
                                <label><b>PASSWORD</b></label></br>
                                <input id="password" type="password" placeholder="Password" name="password" ></br>
                                <small>Error message</small>
                            </div>

                            <?php if(isset($errors['confirmPassword'])): ?>
                                <small style="color:red"> <?= $errors['confirmPassword']; ?> </small>
                                <?php endif ?><br>
                            <div class="form-control5" id="form4">
                                <label><b>CONFIRM PASSWORD</b></label></br>
                                <input id="password2" type="password" placeholder="Confirm Password" name="confirmPassword" ></br>
                                <small>Error message</small>
                            </div>

                            <button type="submit" class="fot-btn2"> créer  compte</button> 
                            <?php
                            if(isset($message)){
                                echo $message;
                            }
                        ?>
                        </form>
                    </div>
                    </div>
                    <div id="right">
                        <img class="ppadmin" src="<?=WEB_ROOT."img/avatar.jpg"?>" alt="">
                        <h3 class="nomadmin">Avatar Admin</h3>
                    </div>
                 </div>               
                