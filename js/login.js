// Obtener elementos del formulario y el mensaje de error
const form = document.getElementById('loginForm');
const errorMessage = document.getElementById('error-message');

// Función para validar las credenciales
function validateLogin(event) {
    event.preventDefault(); // Prevenir el envío del formulario

    // Obtener los valores de los campos de usuario y contraseña
    const usuario = document.getElementById('usuario').value;
    const password = document.getElementById('password').value;

    // Verificar si las credenciales son correctas
    if (usuario === 'admin' && password === '1234') {
        // Si las credenciales son correctas, redirigir al usuario o mostrar mensaje de éxito
        alert('Bienvenido, admin!');
        // Aquí puedes redirigir a otra página si es necesario, por ejemplo:
        window.location.href = 'main.html'; // Cambiar esta URL según sea necesario
    } else {
        // Si las credenciales son incorrectas, mostrar el mensaje de error
        errorMessage.style.display = 'block';
    }
}

// Agregar el evento de envío del formulario
form.addEventListener('submit', validateLogin);
