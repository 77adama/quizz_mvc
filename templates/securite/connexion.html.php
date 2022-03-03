   <?php
   require_once(PATH_VIEWS."include".   DIRECTORY_SEPARATOR."header.html.php");
   if(isset($_SESSION[KEY_ERRORS])){
    $errors=$_SESSION[KEY_ERRORS];
    unset($_SESSION[KEY_ERRORS]);
   }
   
   ?>
   <div id="entete">
        <img src="" alt="">
        <h1>Le plaisir de jouer</h1>
    </div>
  <div id="main">
      <div id="container">
        <form action="<?=WEB_ROOT?>" id="form" method="POST">
              <input type="hidden" name="controller" value="securite">
              <input type="hidden" name="action" value="connexion">
              <div id="loginForm">
                    <h2>Login Form</h2>
                    <p>X</p>
              </div>
              <?php if(isset($errors['connexion'])): ?>
                  <small style="color:red"> <?= $errors['connexion']; ?> </small>
              <?php endif ?><br>
              <?php if(isset($errors['login'])): ?>
                 <small style="color:red"> <?= $errors['login']; ?> </small>
                 <?php endif ?><br>
              <div class="form-control">
                <label>Login</label> <br>
                <input type="text" name="login" id="login" placeholder="Login"> <br>
                <small>Error message</small>
              </div>
              <?php if(isset($errors['password'])): ?>
                <small style="color:red"> <?= $errors['password']; ?> </small>
                <?php endif ?><br>
              <div class="form-control">
                <label >Password</label> <br>
                <input type="password" name="password" id="password" placeholder="Password"> <br>
                <small>Error message</small>
              </div>
              <div id="footer">
                <input type="submit" value="connexion" id="submit">
                <a href="#">s'inscrire pour jouer</a>
              </div>
        </form>
      </div>
  </div>
  
  <?php
   require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."footer.html.php");
   ?>