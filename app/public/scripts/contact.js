let nameValid = /^([a-zA-Zéèîï]|[a-zéèêàçîî]+[-'\s][a-zA-Zéèîï]|[a-zéèêàçîï]+?){3,25}$/;
let firstNameValid = /^([a-zA-Zéèîï]|[a-zéèêàçîî]+[-'\s][a-zA-Zéèîï]|[a-zéèêàçîï]+?){3,25}$/;
let emailValid = /^[a-zA-Z0-9._-]+@[a-z0-9._-]+.[com|fr]{2,4}$/;

let sendBtn = document.getElementById('send');
let contactName = document.getElementById('name');
let contactFirstName = document.getElementById('firstName');
let contactAddress = document.getElementById('address');
let contactEmail = document.getElementById('email');

function verifyContact(value, span, regex){
     if (regex.test(value.value) == false){
         event.preventDefault();
         span.content = "Format incorrect !"
     }  
    
}