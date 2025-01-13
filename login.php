<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web2 - Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <div>
        <a href="index.php"><img class="imgLogo" src="img/logo.png" alt="Logo"></a>
        <form id="loginForm" action="" method="get">
            <label for="usuario">Usuario</label>
            <input type="text" id="usuario" required>

            <label for="password">Password</label>
            <input type="password" id="password" required>

            <button type="submit">Login</button>

            <p id="error-message">Usuario o contraseña incorrectos</p>

            <a target="_self" rel="nofollow" href="registro.php">Crea tu usuario</a>

        </form>
    </div>

    <script src="js/login.js"></script>
</body>

</html>