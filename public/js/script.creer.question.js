
const btnAjout=document.getElementById('ajout');
const divAjout=document.getElementById('divvv');
const delet=document.getElementById('delete');
const form =document.getElementById('formm')
const questionWrap=document.getElementById('question-wrap')
const select =document.getElementById('typeRep')

var nbrElement =0
function ajouter() {
    nbrElement++;
    //En JavaScript , la propriété selectedIndex est utilisée
    // pour définir la valeur d’un élément de zone de sélection  
    choice = select.selectedIndex
    const valeur_cherchee= select.options[choice].value
    //création d'une balise div
   const divChamp=document.createElement('div');
   divChamp.setAttribute('class', 'divChamp')
   
   //creation d'un label
    const labelChamp=document.createElement('label')
    labelChamp.setAttribute('class', 'repons')
    labelChamp.setAttribute('for', 'reponseLabel')
    labelChamp.innerText='réponse '+nbrElement;

    //creation input type text
    const inputText=document.createElement('input')
    inputText.setAttribute('type', 'text')
    inputText.setAttribute('id', 'rpns')
    inputText.setAttribute('name', 'reponses[]')
    divChamp.appendChild(labelChamp)
    divChamp.appendChild(inputText)
    
    switch(valeur_cherchee){
        case 'checkboxValue':
         //création input type checbox
            const inputChecbox=document.createElement('input')
            inputChecbox.setAttribute('type', 'checkbox')
            inputChecbox.setAttribute('id', 'checkbox')
            inputChecbox.setAttribute('name', ' check')
            divChamp.appendChild(inputChecbox)
        break;
        case 'radioValue':
            
                //creation input type radio
                const inputradio=document.createElement('input')
                inputradio.setAttribute('type', 'radio')
                inputradio.setAttribute('id', 'radio')
                inputradio.setAttribute('name', 'rad')
                divChamp.appendChild(inputradio)
        break;
    }



    //creatio de l'image
    const imageDelete=document.createElement('img')
    imageDelete.setAttribute('class', 'ic-supprimer')
    imageDelete.setAttribute('id', 'delete')
    imageDelete.src="../img/ic-supprimer.png"

    imageDelete.addEventListener('click', function(){
        var parent =this.parentElement.parentElement;
        parent.removeChild(divChamp);
    })


    //append child
    divChamp.appendChild(imageDelete)
    divAjout.appendChild(divChamp)
    form.appendChild(divAjout)
    questionWrap.appendChild(form)

   

}


//
btnAjout.addEventListener('click', function(){
    ajouter();
})