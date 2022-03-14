const form=document.getElementById('form');
const nom=document.getElementById('nom')
const prenom=document.getElementById('prenom')
const login=document.getElementById('login')
const password=document.getElementById('password')
const confirmPassword=document.getElementById('password2')
const imgDiv=document.getElementById('right');
const photo =document.getElementById('photo');
const file=document.getElementById('avatar');
const uploadBtn=document.getElementById('uploadBtn');

//
file.addEventListener('change', function(){
    const choosedFile= this.files[0];
    if (choosedFile){
        const reader  = new FileReader();
        reader.addEventListener('load',function(){
            photo.setAttribute('src', reader.result);

        });
        reader.readAsDataURL(choosedFile);
    }
})



function showError(input,message){
    //recuper le parent de input
      const formControl = input.parentElement;
      //attribuer la class form-control et error
      formControl.className = "form-control error";
      // récuper la balisse small
      const small = formControl.querySelector('small');
      small.innerText = message;
}
function showSuccess(input){
    const formControl = input.parentElement;
    formControl.className = "form-control success";
}
function testEmail(input){
    const email = input.value.trim().toLowerCase();
    const re = /(\W|^)[\w.+\-]*@gmail\.com(\W|$)/;
    // const re =  /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(re.test(email)){
        return true;
    }
    else{
        return false;
    }
}
function testPassword(input){
    const champ = input.value;
    const number = /[0-9]/;
    const letter = /[a-zA-Z]/;
    if(champ<6 || (!number.test(champ)) || (!letter.test(champ))){
       return false
    }
    else{
       return true;
    }
}
function checkEmail(input){
    const email = input.value.trim().toLowerCase();
    const re = /(\W|^)[\w.+\-]*@gmail\.com(\W|$)/;
    // const re =  /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(re.test(email)){
        showSuccess(input);
    }
    else{
        showError(input,"veuillez respecter les normes de l email");
    }
}
function lengthCarac(input,min){
    const champ = input.value;
    const number = /[0-9]/;
    const letter = /[a-zA-Z]/;
    if(champ<min || (!number.test(champ)) || (!letter.test(champ))){
        showError(input,"password invalide");
    }
    
    else{
        showSuccess(input);
    }
}
function checkRequred(tabInput){
    tabInput.forEach(input => {
        if (input.value.trim()==='') {
            showError(input, 'ce champ est obligatoire')
        }else{
            showSuccess(input)
        }
    });
}
function comparePassword(input1,input2){
    if (input1.value === input2.value) {
        return true;
    }
    showError(input2, 'les 2 mots de passe ne sont pas les meme')
    return false;
}

form.addEventListener('submit', function(e){
    if (!testEmail(login) || !testPassword(password) || !comparePassword(password,confirmPassword)){
        e.preventDefault();
        checkRequred([nom, prenom, login, password, confirmPassword])
        checkEmail(login)
        lengthCarac(password,6)
        comparePassword(password,confirmPassword)

    }
})