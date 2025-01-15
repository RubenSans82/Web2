<?php
include("./partials/cabecera.php");

include("conexiondb.php");

if (isset($_FILES["foto"])) {
    //guardar la foto en el servidor
    $nombreFoto = $_FILES["foto"]["name"];
    $ruta = "./fotos/" . $nombreFoto;
    if (move_uploaded_file($_FILES["foto"]["tmp_name"], $ruta)) {
        $sql = "UPDATE usuarios SET nombre = :nombre, apellido = :apellido, email = :email, foto = :foto WHERE id = :id";
        $stm = $conexion->prepare($sql);
        $stm->bindParam(":nombre", $_POST["nombre"]);
        $stm->bindParam(":apellido", $_POST["apellido"]);
        $stm->bindParam(":email", $_POST["email"]);
        $stm->bindParam(":foto", $ruta);
        $stm->bindParam(":id", $_POST["id"]);
        $stm->execute();
        $_SESSION['usuario'] = $_POST["email"];
        $_SESSION['idusuario'] = $_POST["id"];
        $_SESSION['nombre'] = $_POST["nombre"];
        $_SESSION['apellido'] = $_POST["apellido"];
        $_SESSION['foto'] = $ruta;
        echo "La foto se ha subido correctamente.";
    } else {
        echo "Hubo un error al subir la foto.";
    }
    header("Location: main.php");


} else {


    $sql = "select * from usuarios where id = :idusuario";
    $stm = $conexion->prepare($sql);
    $stm->bindParam(":idusuario", $_SESSION["idusuario"]);
    $stm->execute();
    $row = $stm->fetch(PDO::FETCH_ASSOC);
    if (!$row) {
        header("Location: login.php");
    }
}

?>

<div id="content">
    <h2>Datos de Usuario</h2>
    <div class="incidencias">
        <form action="" method="post" enctype="multipart/form-data">
            <label for="id">Id Usuario</label>
            <input type="number" name="id" id="" readonly value="<?php echo $row['id'] ?>">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" value="<?php echo $row['nombre'] ?>">
            <label for="apellido">Apellidos</label>
            <input type="text" name="apellido" id="apellido" value="<?php echo $row['apellido'] ?>">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="<?php echo $row['email'] ?>">
            <input type="file" name="foto" id="foto" accept="image/*">
            <input type="submit" value="Editar">
        </form>

    </div>
</div>

</main>
<?php
include("partials/footer.php");
?>
<script src="js/main.js"></script>
</body>

</html>