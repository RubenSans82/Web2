<?php
 if(isset($_POST["nombre"])){
    include("conexiondb.php");
    try {
        // Preparar y ejecutar la consulta SQL
        $sql = "INSERT INTO usuarios (nombre, apellido, email, fecha, password) 
                VALUES (:nombre, :apellido, :email, :fecha, :password)";
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(':nombre', $_POST["nombre"]);
        $stmt->bindParam(':apellido', $_POST["apellido"]);
        $stmt->bindParam(':email', $_POST["email"]);
        $stmt->bindParam(':fecha', $_POST["fecha"]);
        // Encriptar la contraseña antes de guardarla
        $hashed_password = password_hash($_POST["password"], PASSWORD_DEFAULT);
        $stmt->bindParam(':password', $hashed_password);
        //$stmt->bindParam(':password', $_POST["password"]);
        $stmt->execute();
    
        echo "Registro insertado exitosamente";
    
        // Redirigir a la página de login   
        header("Location: login.php");
    } catch (PDOException $e) {
        echo "Conexión fallida: " . $e->getMessage();
    }
 }
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web2 - Registro</title>
    <link rel="stylesheet" href="css/registro.css">
</head>

<body>
    <div> 
        <a href="index.php"><img class="imgLogo" src="img/logo.png" alt="Logo"></a>
        <form action="" method="post">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" required>
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" id="apellido" required>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
            <label for="nacimiento">Fecha de nacimiento</label>
            <input type="date" name="fecha" id="nacimiento">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <label for="password2">Password</label>
            <input type="password" id="password2">
            <span id="aviso">Las contraseñas deben coincidir</span>
            <button type="submit" id="registerBtn" disabled>Registrarse</button>
            <a target="_self" rel="nofollow" href="login.php">Si ya tienes usuario Logeate</a>

        </form>
    </div>
    <script src="js/registro.js"></script> <!-- Este archivo contiene el JavaScript -->

</body>

</html>