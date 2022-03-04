<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?=WEB_ROOT.'css'.DIRECTORY_SEPARATOR."style.accueil.css"?>">
    <link rel="stylesheet" href="<?=WEB_ROOT.'css'.DIRECTORY_SEPARATOR."style.liste.joueur.css"?>">
</head>
<body>
    <nav>     
        <img src="<?=WEB_ROOT."img/logonav.png" ?>" alt="">
        <h1>Le plaisir de jouer</h1>
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
                    <div class="hov">
                        <a href="">Liste Questions</a> 
                        <img src="<?=WEB_ROOT."img/ic-liste.png"?>" class="img1" alt="">
                    </div>
                    <div class="hov">
                         <a href="">Créer Admin</a> 
                         <img src="<?=WEB_ROOT."img/ic-ajout.png"?>" class="img2" alt="">
                    </div>
                    <div class="hov">
                         <a href="<?=WEB_ROOT."?controller=user&action=liste.joueur"?>">Liste joueurs</a> 
                         <img src="<?=WEB_ROOT."img/ic-liste.png" ?>"class="img2" alt="">
                    </div>
                    <div class="hov">
                          <a href="">Créer Question</a>
                          <img src="<?=WEB_ROOT."img/ic-ajout.png"?>" class="img1" alt="">
                    </div>
                  
                </div>
            </div>
            <div class="section_droite">
                <?php 
                    echo $content_for_views;
                ?>
            </div>
        </div>
        <?php endif ?>
    </div>
</body>
</html>