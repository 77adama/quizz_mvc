<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?=WEB_ROOT.'css'.DIRECTORY_SEPARATOR."style.accueil.css"?>">
    <link rel="stylesheet" href="<?=WEB_ROOT.'css'.DIRECTORY_SEPARATOR."style.liste.joueur.css"?>">
    <link rel="stylesheet" href="<?=WEB_ROOT.'css'.DIRECTORY_SEPARATOR."style.creer.admin.css"?>">
    <link rel="stylesheet" href="<?=WEB_ROOT.'css'.DIRECTORY_SEPARATOR."style.question.css"?>">
    <link rel="stylesheet" href="<?=WEB_ROOT.'css'.DIRECTORY_SEPARATOR."style.liste.question.css"?>">


</head>
<body>
    <nav>     
        <img src="<?=WEB_ROOT."img/logonav.png" ?>" alt="">
        <h1>Le plaisir de jouer</h1>
        <?php if(is_joueur()): ?>
        <button onclick="window.location.href='<?=WEB_ROOT."?controller=securite&action=deconnexion"?>';">Déconnexion</button>
        <?php endif ?>
    </nav>
     
    <div class="container">
        <?php if(is_admin()): ?>
        <div class="header"> 
            <h2>CRÉER ET PARAMÉRTER VOS QUIZZ</h2> 
            <button onclick="window.location.href='<?=WEB_ROOT."?controller=securite&action=deconnexion"?>';">Déconnexion</button>
        </div>
        <div class="containe">
            <div class="section_gauche">
                 <div class="image"><img class="im" src="<?=WEB_ROOT."img/avatar.jpg"?>" alt=""></div>
                <div class="btn">
                <a href="<?=WEB_ROOT."?controller=question&action=liste.question"?>">    <div class="hov">
                      <b class="liennn"> Liste Questions </b> 
                        <img src="<?=WEB_ROOT."img/ic-liste.png"?>" class="img1" alt=""> 
                    </div> </a> 
                    <a href="<?=WEB_ROOT."?controller=securite&action=creer.admin"?>">    <div class="hov">
                        <!-- definition du lien lui dire..... -->
                        <b class="liennn">    Créer Admin </b> 
                         <img src="<?=WEB_ROOT."img/ic-ajout.png"?>" class="img2" alt="">
                    </div>  </a> 
                    <a href="<?=WEB_ROOT."?controller=user&action=liste.joueur"?>"> <div class="hov">
                    <b class="liennn">    Liste joueurs </b> 
                         <img src="<?=WEB_ROOT."img/ic-liste.png" ?>"class="img2" alt=""> 
                    </div> </a> 
                    <a href="<?=WEB_ROOT."?controller=question&action=creer.question"?>"> <div class="hov">
                    <b class="liennn">     Créer Question </b> 
                          <img src="<?=WEB_ROOT."img/ic-ajout.png"?>" class="img1" alt=""> 
                    </div> </a>
                  
                </div>
            </div>
            <div class="section_droite">
                <?php 
                // son role c'est de recupere le contenu de lister
                    echo $content_for_views;
                ?>
            </div>
        </div>
        <?php endif ?>
    </div>
    <script src="<?= WEB_ROOT."js/script.creer.admin.js" ?>"></script>
    
</body>
</html>