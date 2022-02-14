<?php

require 'funciones/conexion.php';
include 'includes/index.html';
$nombre = $_POST['nombre'];
$fecha = $_POST['fecha'];
$tema = $_POST['tema'];
$sala = $_POST['sala'];
$link = conectar();
if ($nombre != "" && $fecha != "" && $tema != "" && $sala != "") {
    $sql = "SELECT idinformes_varones,v.nombre,fecha
            FROM informes_varones i, varones v
            WHERE v.idvarones = i.idvarones
            AND v.nombre LIKE '%".$nombre."%'
            AND fecha='".$fecha."'
            AND tema='".$tema."'
            AND sala='".$sala;
    $resultado = mysqli_query($link, $sql)
            or die(mysqli_error($link));
    $cantidad = mysqli_num_rows($resultado);
}
// $sql =   "SELECT idvarones,nombre,fecha
//         FROM informes_varones
//         WHERE nombre LIKE '%".$_POST['buscar']."%'";
// $resultado = mysqli_query($link, $sql)
//     or die(mysqli_error($link));
// $cantidad = mysqli_num_rows($resultado);

?>

<?php
if ($cantidad == 0) {
?>

    <div class="row">
        <h4 class="text-danger m-5 text-center"><i class="fas fa-exclamation-triangle"></i> No se encontraron coincidencias con la búsqueda <i class="fas fa-exclamation-triangle"></i></h4>
    </div>

<?php
} else {
?>

    <h5 class="m-2 p-2">Resultados encontrados: <?= $cantidad ?> </h5>

    <div class="col-5">
            <table id="total" class="table table-hover table-borderless table-striped text-center">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($informe = mysqli_fetch_assoc($informes)) {
                    ?>
                        <tr>
                            <td><?= $informe['idinformes_varones'] ?></td>
                            <td> <a href="verPerfilVaron.php?idvarones=<?= $informe['idvarones'] ?>" id="link"><?= $informe['nombre'] ?></a> </td>
                            <td><?= $informe['fecha'] ?></td>
                            <td>
                                <a href="verInformeVaron.php?idinformes_varones= <?= $informe['idinformes_varones'] ?>" class="btn btn-outline-dark btn-sm fw-bold"><i class="fas fa-eye"></i> Ver</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
<?php
}
?>