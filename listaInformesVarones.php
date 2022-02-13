<?php

require 'funciones/conexion.php';
require 'funciones/informesVarones.php';
$informes = listaInformesVarones();
$alertas = informesAlerta();
$noAsignados = noAsignados();
$cantidad = cantidadNoAsignados();
include 'includes/index.html';
include 'includes/nav.html';

?>
<div class="container col-12">
    <h1 class="m-4">Informes de asignaciones de varones</h1>
    <div class="row mx-auto">
        <div class="col-5">
            <table class="table table-hover table-borderless table-striped text-center">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Asignado</th>
                        <th>Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($informe = mysqli_fetch_assoc($informes)) {
                    ?>
                        <tr>
                            <td><?= $informe['idinformes_varones'] ?></td>
                            <td> <a href="verPerfilVaron.php?idvarones=<?= $informe['idvarones'] ?>"  id="link"><?= $informe['nombre'] ?></a> </td>
                            <td><?= $informe['fecha'] ?></td>
                            <!-- <td>
                                <a href="formEliminarInformeVaron.php?idinformes_varones= <?= $informe['idinformes_varones'] ?>" class="btn btn-outline-secondary btn-sm fw-bold">Eliminar</a>
                            </td> -->
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
        <div class="col-4">
            <h3 class="text-center alert alert-danger mb-0">Alerta</h3>
            <table class="table table-hover table-borderless table-striped text-center">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Ultima asignación</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($alerta = mysqli_fetch_assoc($alertas)) {
                    ?>
                        <tr>
                            <td> <a href="verPerfilVaron.php?idvarones=<?= $alerta['idvarones'] ?>"  id="link"> <?= $alerta['nombre'] ?></a></td>
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
                                <td> <a href="verPerfilVaron.php?idvarones=<?= $noAsignado['idvarones'] ?> "  id="link"><?= $noAsignado['nombre'] ?></a></td>
                            </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>

    </div>

</div>