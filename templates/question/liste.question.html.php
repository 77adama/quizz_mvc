
    <div class="containner">
        <div class="mainn">
            <form action="" method="GET">
               <input type="hidden" name="controller" value="question">
               <input type="hidden" name="action" value="liste.question">

                <label for="" id="labelL">Nbre de question/Jeu</label>
                <input type="number" id="numberL" name="limit"> 
                <input type="submit" value="OK" id="submitL">
            </form>
        </div>
        <div class="containne">
            <table>
                <ol>
                    <?php foreach($items as $value):?>
                       <li class="liQu"><?=$value['question']?></li> 
                       <ul type="square">
                            <?php foreach($value['reponses'] as $val):?>
                            <li><?=$val?></li>  
                             <?php endforeach?>
                       </ul> 
                    <?php endforeach?>
                </ol>
            </table>
        </div>
    </div>
    <div class="input">
    <?php if($page != 1):?>
    <button class="btn1" id="btnnn"><a class="asb" href="http://localhost:8000/?controller=question&action=liste.question&page=<?=$page-1;?>&limit=<?=$limit;?>">Precedent</a></button>
    <?php endif?>
    <?php 
    if($page < $totalPages):?>
    <button class="btn2" id="btnn"><a class="asb" href="http://localhost:8000/?controller=question&action=liste.question&page=<?=$page+1;?>&limit=<?=$limit;?>">suivant</a></button>
    <?php endif?>
    </div>