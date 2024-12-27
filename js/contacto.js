// Obtener el checkbox y el botón
const checkbox = document.getElementById('privacidad');
const button = document.getElementById('enviar');

// Función para comprobar si el checkbox está marcado
function toggleSubmitButton() {
    // Si el checkbox está marcado, habilitar el botón
    if (checkbox.checked) {
        button.disabled = false;

    } else {
        button.disabled = true;
    }
}

// Añadir un evento que se dispara cada vez que se cambia el estado del checkbox
checkbox.addEventListener('change', toggleSubmitButton);

// Llamar a la función al cargar la página para comprobar el estado inicial
toggleSubmitButton();
