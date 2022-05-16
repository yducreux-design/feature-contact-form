let hideField = document.getElementById("hideField");
let showPassword = document.getElementById("showPassword");

/*showPassword.onmousedown = function(){

    hideField.type = "text";
    showPassword.innerText ="Relacher pour cacher";
}
showPassword.onmouseup = function(){

    hideField.type = "password";
    showPassword.innerText ="Maintenir pour afficher";
}

//cacher si click and drag
    showPassword.ondrag = function(){

        hideField.type = "password";
        showPassword.innerText ="Maintenir pour afficher";
    } */

    let btnshow = false;

    showPassword.onclick = function(){
        btnshow = !btnshow;
        if (btnshow) {
            hideField.type = "text";
            showPassword.innerText ="Cliquer pour cacher";
        } else{
            
        hideField.type = "password";
        showPassword.innerText ="Cliquer pour afficher";
        }
    }