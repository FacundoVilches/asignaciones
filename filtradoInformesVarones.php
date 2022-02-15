<?php

include 'includes/index.html';
require 'funciones/informesVarones.php';
require 'funciones/conexion.php';


$alertas = informesAlerta();
$noAsignados = noAsignados();

$nombre = $_POST['nombre'];
$sala = $_POST['sala'];
$fecha = $_POST['fecha'];
$tema = $_POST['tema'];
$link = conectar();

if ($nombre == '') {
    $nombre = ' ';
}

if ($nombre == "" && $fecha == "" && $tema == "" && $sala == "") {
    $sql = "SELECT idinformes_varones,v.idvarones,nombre,fecha
            FROM informes_varones i, varones v
            WHERE v.idvarones = i.idvarones ";
} else {
    $sql = "SELECT idinformes_varones,v.idvarones,nombre,fecha
            FROM informes_varones i, varones v
            WHERE v.idvarones = i.idvarones ";
    if ($nombre != '') {
        $sql .= " AND v.nombre LIKE '%" . $nombre . "%' ";
    }

    if ($fecha != '') {
        $sql .= " AND fecha='" . $fecha . "' ";
    }

    if ($tema != '') {
        $sql .= " AND tema='" . $tema . "' ";
    }

    if ($sala != '') {
        $sql .= " AND sala='" . $sala . "' ";
    }
}

$resultado = mysqli_query($link, $sql)
    or die(mysqli_error($link));
$filtrados = mysqli_num_rows($resultado);
?>

<?php
if($filtrados==0){
?>
        <div class="row">
            <h4 class="text-danger m-5 text-center"><i class="fas fa-exclamation-triangle"></i> No se encontraron coincidencias con la búsqueda <i class="fas fa-exclamation-triangle"></i></h4>
        </div>
<?php
} else {
?>

<h5 class="m-2 p-2">Resultados encontrados: </h5>
            <div class="col-5">

                <table id="respuesta" class="table table-hover table-borderless table-striped text-center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Fecha</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($result = mysqli_fetch_assoc($resultado)) {
                        ?>
                            <tr>
                                <td><?= $result['idinformes_varones'] ?></td>
                                <td> <a href="verPerfilVaron.php?idvarones=<?= $result['idvarones'] ?>" id="link"><?= $result['nombre'] ?></a> </td>
                                <td>
                                    <?php
                                    $result['fecha'];
                                    $cambioFormato = strtotime($result['fecha']);
                                    $nuevoFormato = date('d-m-Y', $cambioFormato);
                                    echo $nuevoFormato;
                                    ?></td>
                                <td>
                                    <a href="verInformeVaron.php?idinformes_varones= <?= $result['idinformes_varones'] ?>" class="btn btn-outline-dark btn-sm fw-bold"><i class="fas fa-eye"></i> Ver</a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="col-4">
                <h3 class="text-center alert alert-danger mb-0">Alerta</h3>
                <table class="table table-hover table-borderless table-striped text-center">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Última asignación</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($alerta = mysqli_fetch_assoc($alertas)) {
                        ?>
                            <tr>
                                <td> <a href="verPerfilVaron.php?idvarones=<?= $alerta['idvarones'] ?>" id="link"> <?= $alerta['nombre'] ?></a></td>
                                <?php
                                if ($alerta['fecha'] == 0) {
                                ?>
                                    <td>Hoy</td>
                                <?php
                                } else if ($alerta['fecha'] <= -2) {
                                ?>
                                    <td>Será en <?= abs($alerta['fecha']) ?> días</td>
                                <?php
                                } else if ($alerta['fecha'] == -1) {
                                ?>
                                    <td>Será en <?= abs($alerta['fecha']) ?> día</td>
                                <?php
                                } else if ($alerta['fecha'] == 1) {
                                ?>
                                    <td>Hace <?= $alerta['fecha'] ?> día</td>
                                <?php
                                } else {
                                ?>
                                    <td>Hace <?= $alerta['fecha'] ?> días</td>
                                <?php
                                }
                                ?>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>

            <div class="col-3">
                <h3 class="text-center alert alert-info mb-0">No asignados</h3>
                <table class="table table-hover table-borderless table-striped text-center">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        if ($cantidad == 0) {
                        ?>
                            <tr>
                                <td class="text-success">Ningún matriculado quedó sin asignar</td>
                            </tr>
                            <?php
                        } else {
                            while ($noAsignado = mysqli_fetch_assoc($noAsignados)) {
                            ?>
                                <tr>
                                    <td> <a href="verPerfilVaron.php?idvarones=<?= $noAsignado['idvarones'] ?> " id="link"><?= $noAsignado['nombre'] ?></a></td>
                                </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <?php
}
            ?>