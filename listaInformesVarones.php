<?php

require 'funciones/conexion.php';
require 'funciones/informes.php';
$informes = listaInformesVarones();
$alertas = informesAlerta();
$noAsignados = noAsignados();
include 'includes/index.html';

?>
<div class="container col-12">
    <ul class="nav p-4 mx-auto bg-dark">
        <li class="nav-item m-4">
            <a href="index.php" class="nav-item text-decoration-none text-light">INICIO</a>
        </li>
        <li class="nav-item m-4">
            <a href="listaVarones.php" class="nav-item text-decoration-none text-light">LISTA VARONES</a>
        </li>
        <li class="nav-item m-4">
            <a href="#" class="nav-item text-decoration-none text-light">INFORMES VARONES</a>
        </li>
    </ul>
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
                            <td> <a href="verPerfilVaron.php?idvarones=<?= $informe['idvarones'] ?>" class="text-decoration-none" id="link"><?= $informe['nombre'] ?></a> </td>
                            <td><?= $informe['fecha'] ?></td>
                            <td>
                                <a href="formEliminarInformeVaron.php?idinformes_varones= <?= $informe['idinformes_varones'] ?>" class="btn btn-outline-secondary btn-sm fw-bold">Eliminar</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="col-4">
            <h3 class="text-center alert alert-danger">Alerta</h3>
            <table class="table table-hover table-borderless table-striped text-center">
                <thead>
                    <tr>
                        <th>Asignado</th>
                        <th>Meses sin asignación</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($alerta = mysqli_fetch_assoc($alertas)) {
                    ?>
                        <tr>
                            <td> <a href="verPerfilVaron.php?idvarones=<?= $alerta['idvarones'] ?> " class="text-decoration-none" id="link"> <?= $alerta['nombre'] ?></a></td>
                            <td><?= $alerta['fecha'] ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <div class="col-3">
            <h3 class="text-center alert alert-info">No asignados</h3>
            <table class="table table-hover table-borderless table-striped text-center">
                <thead>
                    <tr>
                        <th>Nombre</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($noAsignado = mysqli_fetch_assoc($noAsignados)) {
                    ?>
                        <tr>
                            <td> <a href="verPerfilVaron.php?idvarones=<?= $noAsignado['idvarones'] ?> " class="text-decoration-none" id="link"><?= $noAsignado['nombre'] ?></a></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>

    </div>

</div>