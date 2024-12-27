// Obtener los elementos de los campos de contraseña y el botón de registro
var password = document.getElementById('password');
var confirmPassword = document.getElementById('password2');
var registerBtn = document.getElementById('registerBtn');

// Función para verificar si las contraseñas coinciden
/*function checkPasswords() {
    if (password.value === confirmPassword.value && password.value !== '') {
        registerBtn.disabled = false; // Habilitar el botón si las contraseñas coinciden
    } else {
        registerBtn.disabled = true; // Deshabilitar el botón si no coinciden
    }
}

// Agregar event listeners para verificar cada vez que el usuario escribe
password.addEventListener('input', checkPasswords);
confirmPassword.addEventListener('input', checkPasswords);
*/




/*
// Otra manera

password.onchange=function(){
    var txtPass=password.value;
    console.log(txtPass)
}
confirmPassword.onchange=function(){
    var txtPass2=confirmPassword.value;
    console.log(txtPass2)
}
*/
password.oninput = checkPasswords
confirmPassword.oninput = checkPasswords

function checkPasswords() {

    var aviso = document.getElementById('aviso')
    if (password.value === confirmPassword.value && password.value !== '') {
        registerBtn.disabled = false; // Habilitar el botón si las contraseñas coinciden
        password.style.borderColor = 'green';
        confirmPassword.style.borderColor = 'green';
        aviso.style.display = "none"
    } else {
        registerBtn.disabled = true; // Deshabilitar el botón si no coinciden
        password.style.borderColor = 'red';
        confirmPassword.style.borderColor = 'red';
        aviso.style.display = "block"
    }
}