<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web2 - Main</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header style="width: 100%;">
        <img class="imgLogo" src="img/logo.png" alt="Logo">


        <div>
            <img class="imgUser" src="img/usuario.png" alt="Usuario">
            <div id="user">
                <ul>
                    <li><a href="">Datos de usuario</a></li>
                    <li><a href="logout.php">Cerrar sesion</a></li>

                </ul>

            </div>
        </div>

    </header>
    <main>
        <!-- ------------- BARRA LATERAL ------------- -->
        <aside>
            <button id="menuButton">
                <img src="img/menu.jpg" alt="Menu">
            </button>
            <div id="sidebar">
                <ul>
                    <li><a href="main.php#seccion1"><i class="fa-solid fa-cart-shopping"></i> Pedidos</a></li>
                    <li><a href="main.php#seccion2"><i class="fa-solid fa-file-invoice"></i> Facturas</a></li>
                    <li><a href="main.php#incidencias"><i class="fa-solid fa-triangle-exclamation"></i> Incidencias</a></li>
                    <li><a href="main.php#seccion4"><i class="fa-solid fa-calendar"></i> Calendario</a></li>
                    <li><a href="main.php#seccion5"><i class="fa-solid fa-newspaper"></i> Presupuestos</a></li>
                </ul>
            </div>
        </aside>