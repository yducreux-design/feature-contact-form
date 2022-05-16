let password = document.getElementById('input-password');
let confirmation = document.getElementById('input-confirmation');
let message = document.getElementById('message');

confirmation.addEventListener('keyup',function() {

if (password.value === confirmation.value) {
    message.innerText = "Passwords match";
    message.style.color = 'green';
} else{
    message.innerText = "Passwords don't match";
    message.style.color = 'red';
}
});