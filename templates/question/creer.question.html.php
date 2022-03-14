<div class="question" id="question">
    <h2 class="tq">PARAMETRER VOTRE QUESTION</h2>
   <div class="question-wrap" id="question-wrap">
        <form action="<?= WEB_ROOT?>" method="POST" id="formm"> 
        <input type="hidden" name="controller" value="question">
              <input type="hidden" name="action" value="creer.question">
                <div id="divv" class="textarea">

                        <label for="">question</label>
                        <textarea name="question" id="" cols="60" rows="5"></textarea>
                </div>
                <div id="divv" class="nmbrepoint">
                    <label for="nmbrP">nombres de points</label>
                    <input type="number" id="nmbrP" name="nbrPoints" min="1" max="10">
                </div>
                <div id="divv" class="typereonse">
                    <label for=""> type de réponse</label>
                    <select name="select" id="typeRep">
                        <option value="choi">---Donnez le type de reponses---</option>
                        <option value="radioValue">  choix simple</option>
                        <option value="checkboxValue"> choix multiple</option>
                        <option value="champDeTexte">texte</option>
                    </select>
                <img id="ajout" class="ajout-reponse" src="<?=WEB_ROOT."img/ic-ajout-réponse.png"?>" alt="">  
                </div>
                <div id="divvv" class="reponse">
                    
                </div>
                <button id="BTN">Enregistrer</button>
        </form>
    </div>
</div>
<script src="<?= WEB_ROOT."js/script.creer.question.js" ?>"></script>