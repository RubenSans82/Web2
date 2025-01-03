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

var papeleras=document.getElementsByClassName('fa-trash');

for (var i = 0; i < papeleras.length; i++) {
    papeleras[i].addEventListener('click', function() {
        var row = this.closest('tr');
        var confirmar = confirm('¿Estás seguro de que quieres borrar este registro?');
        if (confirmar) {
            row.parentNode.removeChild(row);
        }
    });
}