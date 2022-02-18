<?php
require 'sesion/config.php';
require 'funciones/autenticacion.php';
autenticar();
require 'funciones/conexion.php';
include 'includes/index.html';
$nombre = $_POST['buscar'];
$link = conectar();
$sql =   "SELECT idvarones,nombre
        FROM varones
        WHERE nombre LIKE '%".$nombre."%'";
$resultado = mysqli_query($link, $sql)
    or die(mysqli_error($link));
$cantidad = mysqli_num_rows($resultado);

?>

<?php
if($cantidad == 0){
?>

<div class="row">
    <h4 class="text-danger m-5 text-center"><i class="fas fa-exclamation-triangle"></i> No se encontraron coincidencias con la búsqueda <i class="fas fa-exclamation-triangle"></i></h4>
</div>

<?php
} else {
?>

<h5 class="m-2 p-2">Resultados encontrados: <?= $cantidad ?> </h5>

<table class="table table-hover table-borderless table-striped text-center">
    <thead>
        <tr>
            <th>#</th>
            <th colspan="4">Nombre</th>
            <th colspan="">
                <a href="formAgregarVaron.php" class="btn btn-outline-success btn-sm fw-bold"><i class="fas fa-plus"></i> Agregar</a>
            </th>
        </tr>
    </thead>
    <tbody>

        <?php
        while ($resultados = mysqli_fetch_assoc($resultado)) {
        ?>
        <tr>
                    <td><?= $resultados['idvarones'] ?></td>
                    <td colspan="4"> <a href="verPerfilVaron.php?idvarones=<?= $resultados['idvarones'] ?>" id="link"><?= $resultados['nombre'] ?></a> </td>
                    <td>
                        <a href="formModificarVaron.php?idvarones=<?= $resultados['idvarones'] ?>" class="btn btn-outline-primary btn-sm fw-bold"><i class="fas fa-marker"></i> Modificar</a>
                    </td>
                    <td>
                        <a href="formEliminarVaron.php?idvarones=<?= $resultados['idvarones'] ?>" class="btn btn-outline-danger btn-sm fw-bold"><i class="fas fa-trash-alt"></i> Eliminar</a>
                    </td>
                </tr>
        <?php
        }
        ?>
    </tbody>
</table>
<?php
}
?>