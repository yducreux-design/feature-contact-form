let hideField = document.getElementById("hideField");
let showPassword = document.getElementById("showPassword");

showPassword.onmousedown = function(){

    hideField.type = "text";
    showPassword.innerText ="Relacher pour cacher";
}
showPassword.onmouseup = function(){

    hideField.type = "password";
    showPassword.innerText ="Maintenir pour afficher";
}
