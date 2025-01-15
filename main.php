<?php
include('conexiondb.php');
$sql = 'select * from incidencias';
$result = $conexion->query($sql);
?>

<?php
include('partials/cabecera.php');
?>
        <div id="content">
            <h2 id="incidencias">Listado de Incidencias</h2>
            <div class="incidencias">
                <form id="formIncidencias" action="nueva_incidencia.php" method="post">
                    <label for="fecha">Fecha</label>
                    <input required type="date" name="fecha" id="fecha">
                    <label for="descripcion">Descripción</label>
                    <textarea required name="descripcion" id="descripcion" cols="100%" rows="3"></textarea>
                    <button type="submit" id="agregar">Agregar</button>
                </form>
            </div>
            <div class="listado">
                <table id="tabla">
                    <thead>
                        <th>Id</th>
                        <th>Fecha</th>
                        <th>Descripción</th>
                        <th>Operaciones</th>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = $result->fetch()) {
                            echo "<tr>
                            <td>" . $row['id'] . "</td>
                            <td>" . $row['fecha'] . "</td>
                            <td>" . $row['descripcion'] . "</td>
                            <td>
                                <a href='editar_incidencia.php?idincidencia=" . $row['id'] . "'><i class='fa-solid fa-pen-to-square'></i></a>
                                <a href='borrar_incidencia.php?idincidencia=" . $row['id'] . "'><i class='fa-solid fa-trash'></i></a></td>
                            </tr>";
                        }

                        ?>
                    </tbody>
                </table>
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