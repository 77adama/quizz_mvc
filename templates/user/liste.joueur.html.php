    <p class="titre"> <b class="titre"> LISTE DES JOUEURS PAR SCORE </b></p>
<div class="tableau">
    <div id="liste">
                <table>
                        
                        <tr>
                            <th class="th1">Nom</th>
                            <th class="th2">Prenom</th>
                            <th class="th3">Score</th>
                        </tr>
                        <?php foreach($items as $value):?>
                        <tr>
                            <td class="td1"><?=$value['nom']?></td>
                            <td class="td2"><?=$value['prenom']?></td>
                            <td class="td3"><?=$value['score']?></td> 
                        </tr>
                        <?php endforeach?>
                    </table>
    </div>
</div>
<div class="input">
    <?php if($page != 1):?>
    <button class="btn1"><a href="http://localhost:8000/?controller=user&action=liste.joueur&page=<?=$page-1;?>">precedent</a></button>
    <?php endif?>
    <?php 
    if($page < $totalPages):?>
    <button class="btn2"><a href="http://localhost:8000/?controller=user&action=liste.joueur&page=<?=$page+1;?>">suivant</a></button>
    <?php endif?>
</div>