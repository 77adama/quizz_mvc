
const btnAjout=document.getElementById('ajout');
const divAjout=document.getElementById('divvv');
const delet=document.getElementById('delete');
const form =document.getElementById('formm')
const questionWrap=document.getElementById('question-wrap')
const select =document.getElementById('typeRep')
var incrementationButton= document.querySelector('.inc-button')
var decrementationButton= document.querySelector('.dec-button')
var namInput= document.querySelector('#nmbrP')


namInput.addEventListener('#nmbrP', ()=>{
    namInput.setCustomValidity('');
    namInput.checkValidity();
});
namInput.addEventListener('invalid', ()=>{
    if(namInput.value=== ''){
        namInput.innerHTML="veuillez saisir une valeur"
    }else if(namInput.value==="[A-Za-z]"){
        namInput.innerHTML='veuillez saisir un nombre'
    }
})



incrementationButton.addEventListener('click', function(event){
        var buttonClickted=event.target; 
        var input= buttonClickted.parentElement.children[2];
        var inputValue = input.value
        var newValue = parseInt(inputValue)+1;
        input.value = newValue;
   })
    
  decrementationButton.addEventListener('click', function(event){
    var buttonClickted=event.target; 
    var input= buttonClickted.parentElement.children[2];
    var inputValue = input.value
    var newValue = parseInt(inputValue)-1;
    input.value = newValue;
    if (newValue>=0) {
        input.value=newValue;
    }else{
       input.value=0
       input.style.border='2px solid red'
    }
})


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

    // if(valeur_cherchee==checkboxValue){
    //     const inputChecbox=document.createElement('input')
    //     inputChecbox.setAttribute('type', 'checkbox')
    //     inputChecbox.setAttribute('id', 'checkbox')
    //     inputChecbox.setAttribute('name', ' check[]')
    //     inputChecbox.setAttribute('value', nbrElement)
    //     divChamp.appendChild(inputChecbox)
    // }

    switch(valeur_cherchee){
        case 'champDeTexte':
           
            
 //style dans js: display none de btnAjout si le nombre d'élement = 1
            if(nbrElement===1){
                btnAjout.style.display='none'
                // divChamp.style.display='none'
                // select.disabled='true'
                
            }
        break;

        case 'checkboxValue':
          
           
         //création input type checbox
            const inputChecbox=document.createElement('input')
            inputChecbox.setAttribute('type', 'checkbox')
            inputChecbox.setAttribute('id', 'checkbox')
            inputChecbox.setAttribute('name', ' check[]')
            inputChecbox.setAttribute('value', nbrElement)
            divChamp.appendChild(inputChecbox)
            // select.disabled='true'
             
        break;
        case 'radioValue':
           
               
                //creation input type radio
                const inputradio=document.createElement('input')
                inputradio.setAttribute('type', 'radio')
                inputradio.setAttribute('id', 'radio')
                inputradio.setAttribute('name', 'check[]')
                inputradio.setAttribute('value', nbrElement)
                divChamp.appendChild(inputradio)
                // select.disabled='true'
                
        break;
        case 'choi':
            divChamp.style.display='none'
        break;
    }

select.addEventListener('change', ()=>{
    divChamp.innerHTML="";
    
})
    //creatio de l'image
    const imageDelete=document.createElement('img')
    imageDelete.setAttribute('class', 'ic-supprimer')
    imageDelete.setAttribute('id', 'delete')
    imageDelete.src="../img/ic-supprimer.png"
    
    imageDelete.addEventListener('click', function(){
        var parent =this.parentElement.parentElement;
        parent.removeChild(divChamp);
        reflesh()
    })


    //append child
    divChamp.appendChild(imageDelete)
    divAjout.appendChild(divChamp)
    form.appendChild(divAjout)
    questionWrap.appendChild(form)

   

}
function reflesh(){
  const listLabel=document.querySelectorAll('.repons');
  listLabel.forEach((label, i)=>{
      label.innerHTML='reponse' +(i+1)
  })
}

//
btnAjout.addEventListener('click', function(){
    ajouter();
    reflesh()

})