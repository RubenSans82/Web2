<?php
if (isset($_POST["email"])) {
    include("conexiondb.php");
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Preparar y ejecutar la consulta para obtener el hash de la contraseña almacenada
    $sql = "SELECT password,id,nombre,apellido,foto FROM usuarios WHERE email = :email";
    $stmt = $conexion->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($result && password_verify($password, $result['password'])) {
        // Redirigir a la página de inicio o dashboard
        session_start();
        $_SESSION['usuario'] = $email;
        $_SESSION['idusuario'] = $result['id'];
        $_SESSION['nombre'] = $result['nombre'];
        $_SESSION['apellido'] = $result['apellido'];
        $_SESSION['foto'] = $result['foto'];
        header("Location: main.php");
    } else {
        $error = "Email o contraseña incorrectos";
    }

    // Cerrar la conexión
    $conexion = null;
}
?>

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
        <form id="loginForm" action="" method="post">
            <label for="usuario">Usuario</label>
            <input type="email" name="email" id="usuario" placeholder="Introduce tu email" required>

            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>

            <button type="submit">Login</button>

            <a target="_self" rel="nofollow" href="registro.php">Crea tu usuario</a>



        </form>
        <?php if (isset($error)) { ?>
            <p class="error"><?php echo $error;
        } ?>
        </p>
    </div>

    <script src="js/login.js"></script>
</body>

</html>