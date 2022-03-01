<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?=WEB_ROOT.'css'.DIRECTORY_SEPARATOR."style.connexion.css"?>">
  <script src="https://kit.fontawesome.com/a076d05399.js"> </script>
  <title>Mon site - Connexion</title>
</head>
<body>
  <div class="container">
   <div class="nav">
     <h3>Login Form</h3>
     <button type="submit">X</button>
   </div>
    <div class="tab-body" data-id="connexion">
      <form>
        <div class="row">
          <i class="far fa-user"></i>
          <input type="email" class="input" placeholder="Adresse Mail">
        </div>
        <div class="row">
          <i class="fas fa-lock"></i>
          <input placeholder="Mot de Passe" type="password" class="input">
        </div>
       <!----> 
      </form>
    </div>

    <div class="tab-body" data-id="inscription">
      <form>
        <div class="row">
          <i class="far fa-user"></i>
          <input type="email" class="input" placeholder="Adresse Mail">
        </div>
        <div class="row">
          <i class="fas fa-lock"></i>
          <input type="password" class="input" placeholder="Mot de Passe">
        </div>
        <div class="row">
          <i class="fas fa-lock"></i>
          <input type="password" class="input" placeholder="Confirmer Mot de Passe">
        </div>
      </form>
    </div>
    <div class="tab-footer">
      <a class="tab-link active" data-ref="connexion" href="javascript:void(0)">Connexion</a>
      <a class="tab-link" data-ref="inscription" href="javascript:void(0)">s'inscrire pour jouer?</a>
    </div>
  </div>
  <script src="g.js" defer></script>
</body>

</html>