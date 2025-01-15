document.querySelector('.imgUser').addEventListener('click', function() {
    var userMenu = document.getElementById('user');
    if (userMenu.style.display === 'block') {
        userMenu.style.display = 'none';
    } else {
        userMenu.style.display = 'block';
    }
});

document.getElementById('menuButton').addEventListener('click', function() {
    var sidebar = document.getElementById('sidebar');
    if (sidebar.classList.contains('show')) {
        sidebar.classList.remove('show');
    } else {
        sidebar.classList.add('show');
    }
});

document.addEventListener('click', function(event) {
    var sidebar = document.getElementById('sidebar');
    var menuButton = document.getElementById('menuButton');
    if (!sidebar.contains(event.target) && !menuButton.contains(event.target)) {
        sidebar.classList.remove('show');
    }
});

/* 
var papeleras = document.getElementsByClassName('fa-trash');

for (var i = 0; i < papeleras.length; i++) {
    papeleras[i].addEventListener('click', function() {
        var row = this.closest('tr');
        var confirmar = confirm('¿Estás seguro de que quieres borrar este registro?');
        if (confirmar) {
            row.parentNode.removeChild(row); // opcionalmente row.remove();
        }
    });
}

// Obtener la fecha actual en formato YYYY-MM-DD
const today = new Date().toISOString().split('T')[0];

// Asignar la fecha al campo de tipo date
document.getElementById('fecha').value = today;



var formulario = document.getElementById('formIncidencias');
formulario.addEventListener('submit', function(event) {
    event.preventDefault();

    var fecha = document.getElementById('fecha').value;
    var descripcion = document.getElementById('descripcion').value;

    // Convertir la fecha a formato dd-mm-yyyy
    var fechaParts = fecha.split('-');
    var fechaFormatted = fechaParts[2] + '/' + fechaParts[1] + '/' + fechaParts[0];



    var table = document.querySelector('table tbody');
    var newRow = table.insertRow();

    var cell1 = newRow.insertCell(0);
    var cell2 = newRow.insertCell(1);
    var cell3 = newRow.insertCell(2);
    var cell4 = newRow.insertCell(3);

    cell1.innerHTML = getMaxId()+1;
    cell2.innerHTML = fechaFormatted;
    cell3.innerHTML = descripcion;
    cell4.innerHTML = '<button><i class="fa-solid fa-pen-to-square"></i></button> <button><i class="fa-solid fa-trash"></i></button>';

    // Add event listener to the new delete button
    newRow.querySelector('.fa-trash').addEventListener('click', function() {
        var row = this.closest('tr');
        var confirmar = confirm('¿Estás seguro de que quieres borrar este registro?');
        if (confirmar) {
            row.parentNode.removeChild(row); // opcionalmente row.remove();
        }
    });

    // Reset the form
    formulario.reset();
    document.getElementById('fecha').value = today;
});




function getMaxId() {
    var table = document.querySelector('table tbody');
    var maxId = 0;
    for (var i = 0; i < table.rows.length; i++) {
        var id = parseInt(table.rows[i].cells[0].innerText);
        if (id > maxId) {
            maxId = id;
        }
    }
    return maxId;
}

*/