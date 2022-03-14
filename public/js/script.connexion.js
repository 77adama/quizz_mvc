const form = document.getElementById('form');
const login = document.getElementById('login');
const password = document.getElementById('password');

//

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
    // const re =  /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    const re = /(\W|^)[\w.+\-]*@gmail\.com(\W|$)/;
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

//
form.addEventListener('submit',function(e){
    if (!testEmail(login) || !testPassword(password) ){
        e.preventDefault();
        checkEmail(login);
        lengthCarac(password,6);
    }
});