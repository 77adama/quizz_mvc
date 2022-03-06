    <p class="titre"> <b class="titre"> LISTE DES JOUEURS PAR SCORE </b></p>
<div class="tableau">
    <div id="liste">
                <table>
                        
                        <tr>
                            <th class="th1">Nom</th>
                            <th class="th2">Prenom</th>
                            <th class="th3">Score</th>
                        </tr>
                        <?php foreach($data as $value):?>
                        <tr>
                            <td class="td1"><?=$value['nom']?></td>
                            <td class="td2"><?=$value['prenom']?></td>
                            <td class="td3"><?=$value['score']?></td> 
                        </tr>
                        <?php endforeach?>
                    </table>
    </div>
</div>
<div class="inputt"><input class="submitt" type="submit" value="suivant"></div>
