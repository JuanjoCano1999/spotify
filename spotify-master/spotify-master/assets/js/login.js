const form = document.getElementById("form");
const nombre = document.getElementById("name");
const email = document.getElementById("email");
const telefono = document.getElementById("tel");
const password = document.getElementById("pass");
const parrafo = document.getElementById("parrafo");

document.getElementById("submit").addEventListener('click', e=>{
  e.preventDefault()
  let warnings = ""
  let entrar = false
  let regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/

  
  if(!regexEmail.test(email.value)){
    warnings += "El email no es válido <br>" 
    entrar = true;
  }

  if(pass.value.length < 8){
    warnings += "La contraseña debe de tener al menos 8 carácteres";
    entrar = true;
  }

  if(entrar){
    parrafo.innerHTML = warnings;
    document.getElementById("parrafo").style.color = "red";
  }
  
});