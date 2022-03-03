<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?=WEB_ROOT.'css'.DIRECTORY_SEPARATOR."style.accueil.css"?>">
</head>
<body>
    <nav>     
        <img src="<?=WEB_ROOT."img/logonav.png" ?>" alt="">
        <h1>Le plaisir de jouer</h1>
       
        <a class="dec" href="<?=WEB_ROOT."?controller=securite&action=deconnexion"?>">Déconnexion</a>
    </nav>
     
    <div class="container">
        <?php if(is_admin()): ?>
        <div class="header"> <h2>CRÉER ET PARAMÉRTER VOS QUIZZ</h2> </div>
        <div class="containe">
            <div class="section_gauche">
                 <div class="image"><img class="im" src="<?=WEB_ROOT."img/im.png"?>" alt=""></div>
                <div class="btn">
                   <a href="">Liste Questions</a> 
                    <a href="">Créer Admin</a> 
                    <a href="<?=WEB_ROOT."?controller=user&action=liste.joueur"?>">Liste joueurs</a> 
                    <a href="">Créer Question</a>
                </div>
            </div>
            <div class="section_droite"></div>
        </div>
        <?php endif ?>
    </div>
</body>
</html>