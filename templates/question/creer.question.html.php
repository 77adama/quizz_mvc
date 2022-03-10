<div class="question" id="question">
    <h2 class="tq">PARAMETRER VOTRE QUETION</h2>
   <div class="question-wrap" id="question-wrap">
        <form action="<?= WEB_ROOT?>" method="POST" id="formm"> 
                <div id="divv" class="textarea">

                        <label for="">quetion</label>
                        <textarea name="qtion" id="" cols="60" rows="5"></textarea>
                </div>
                <div id="divv" class="nmbrepoint">
                    <label for="nmbrP">nombres de points</label>
                    <input type="number" id="nmbrP" name="nmbrP" min="1" max="10">
                </div>
                <div id="divv" class="typereonse">
                    <label for=""> type de réponse</label>
                    <select name="select">
                        <option value="">  choix simple</option>
                        <option value=""> choix multiple</option>
                        <option value="">texte</option>
                    </select>
                <img class="ajout-reponse" src="<?=WEB_ROOT."img/ic-ajout-réponse.png"?>" alt="">  
                </div>
                <div id="divvv" class="reponse">
                    <label class="repons" for="rpns">Réponse 1</label>
                    <input type="text" id="rpns">
                    <input type="checkbox" id="checkbox" name="check">
                    <input type="radio" id="radio" name="rad"> 
                    <img id="delete" class="ic-supprimer" src="<?=WEB_ROOT."img/ic-supprimer.png"?>" alt="">
                </div>
                <button id="BTN">Enregistrer</button>
        </form>
    </div>
</div>