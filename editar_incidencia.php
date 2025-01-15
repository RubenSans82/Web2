<?php
include("partials/cabecera.php");
if(! isset($_GET["idincidencia"])){
    header("Location: main.php");
}
include("conexiondb.php");
if (isset($_POST["id"])) {
    $id = $_POST['id'];
    $fecha = $_POST['fecha'];
    $descripcion = $_POST['descripcion'];


    $sql = "UPDATE incidencias SET fecha = :fecha, descripcion = :descripcion WHERE id = :id";
    $stm = $conexion->prepare($sql);
    $stm->bindParam(':fecha', $fecha);
    $stm->bindParam(':descripcion', $descripcion);
    $stm->bindParam(':id', $id);

    if ($stm->execute()) {
        header("Location: main.php");
    } else {
        echo "Error al actualizar la incidencia.";
    }
}

$sql = "select * from incidencias where id = :idincidencia";
$stm=$conexion->prepare($sql);
$stm->bindParam(":idincidencia", $_GET["idincidencia"]);
$stm->execute();
$row=$stm->fetch(PDO::FETCH_ASSOC);
if(!$row){
    header("Location: main.php");
}
?>

<div id="content">
            <h2 id="incidencias">Edicion de Incidencias</h2>
            <div class="incidencias">
                <form id="formIncidencias" action="" method="post">
                <label for="id">Id Incidencia</label>
                <input required type="number" name="id" id="" readonly value="<?php echo $row['id']?>">
                    <label for="fecha">Fecha</label>
                    <input required type="date" name="fecha" id="fecha" value="<?php echo $row['fecha']?>">
                    <label for="descripcion">Descripción</label>
                    <textarea required name="descripcion" id="descripcion" cols="100%" rows="3"><?php echo $row['descripcion']; ?></textarea>
                    <button type="submit" id="agregar">Editar</button>
                </form>
            </div>
        </div>
        <section>

        </section>
    </main>
<?php
    include("partials/footer.php");
    ?>
    <script src="js/main.js"></script>
</body>

</html>


