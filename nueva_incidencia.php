<?php
include("partials/cabecera.php");

if (isset($_POST["fecha"])) {

    include("conexiondb.php");
    session_start();
    $fecha = $_POST["fecha"];
    $descripcion = $_POST["descripcion"];
    $idusuario = $_SESSION["idusuario"];
    $sql = "INSERT INTO incidencias (fecha, descripcion, idusuario) VALUES (:fecha, :descripcion, :idusuario)";
    $stmt = $conexion->prepare($sql);
    $stmt->bindParam(':fecha', $fecha);
    $stmt->bindParam(":descripcion", $descripcion);
    $stmt->bindParam(":idusuario", $idusuario);
    $stmt->execute();
    $conexion = null;
    header("Location: main.php");


} else {
    header("Location: main.php");
}


?>