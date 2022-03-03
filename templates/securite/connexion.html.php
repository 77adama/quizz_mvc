   <?php
   require_once(PATH_VIEWS."include".   DIRECTORY_SEPARATOR."header.html.php");
   ?>
   <div class="header">
        <img src="" alt="">
        <h1>Le plaisir de jouer</h1>
    </div>
  <div class="container">
   <div class="nav">
     <h3>Login Form</h3>
     <button type="submit">X</button>
   </div>
    <div class="tab-body" data-id="connexion">
      <form action="<?=WEB_ROOT?>" method="POST">
      <input type="hidden" name="controller" value="securite">
      <input type="hidden" name="action" value="connexion">
        <div class="row">
          <i class="far fa-user"></i>
          <input type="email" class="input" id="email" placeholder="Adresse Mail">
        </div>
        <div class="row">
          <i class="fas fa-lock"></i>
          <input placeholder="Mot de Passe" type="password" id="password" class="input">
        </div>
        <input type="submit" value= "valider">
       <!----> 
      </form>
    </div>

    <div class="tab-body" data-id="inscription">
      <form>
        <div class="row">
          <i class="far fa-user"></i>
          <input type="email" id="email" class="input" placeholder="Adresse Mail">
        </div>
        <div class="row">
          <i class="fas fa-lock"></i>
          <input type="password" id="password" class="input" placeholder="Mot de Passe">
        </div>
        <div class="row">
          <i class="fas fa-lock"></i>
          <input type="password" id="password" class="input" placeholder="Confirmer Mot de Passe">
        </div>
        <input type="submit" value="envoyer">
      </form>
    </div>
    <div class="tab-footer">
        
      <a class="tab-link active" data-ref="connexion" href="javascript:void(0)">Connexion</a>
      <a class="tab-link" data-ref="inscription" href="javascript:void(0)">s'inscrire pour jouer?</a>
    </div>
  </div>
  <?php
   require_once(PATH_VIEWS."include".   DIRECTORY_SEPARATOR."footer .html.php");
   ?>