<?php

require 'funciones/conexion.php';
require 'funciones/varones.php';
require 'funciones/informes.php';
$perfil = verVaronID();
$historiales = verHistorial();
include 'includes/index.html';

?>

<main class="container col-12">
    <ul class="nav p-4 mx-auto bg-dark">
        <li class="nav-item m-4">
            <a href="index.php" class="nav-item text-decoration-none text-light">INICIO</a>
        </li>
        <li class="nav-item m-4">
            <a href="listaVarones.php" class="nav-item text-decoration-none text-light">LISTA VARONES</a>
        </li>
        <li class="nav-item m-4">
            <a href="listaInformesVarones.php" class="nav-item text-decoration-none text-light">INFORMES VARONES</a>
        </li>
    </ul>
    <h1 class="m-4">Perfil</h1>
    <div class="row">
        <div class="col-6 mx-auto centrado">
            <img src="img/user.jpg" id="foto-perfil" class="border-radius img-fluid" alt="">
        </div>
    </div>
    <div class="row mx-auto">
        <div class="col m-2">
            <table class="table table-borderless">
                <thead>
                    <tr class="d-flex justify-content-around">
                        <th class="col-4 text-center">#</th>
                        <th class="col-4 text-center">Nombre</th>
                        <th class="col-4 text-center">Contacto</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="d-flex justify-content-around">
                        <td class="col-4 text-center"><?= $perfil['idvarones'] ?></td>
                        <td class="col-4 text-center"><?= $perfil['nombre'] ?></td>
                        <td class="col-4 text-center"><?= $perfil['contacto'] ?></td>
                    </tr>
                </tbody>
            </table>
            <div class="d-flex justify-content-end m-5">
                <a href="formCrearInforme.php?idvarones=<?= $perfil['idvarones'] ?> " class="btn btn-outline-secondary btn-sm fw-bold">Crear informe</a>
            </div>

        </div>
    </div>

    <h1 class="m-4">Historial de asignaciones</h1>

    <div class="row mx-auto">
        <div class="col m-2">
            <table class="table table-borderless text-center">
                <thead>
                    <tr class="d-flex justify-content-around">
                        <th class="col-4 text-center">#</th>
                        <th class="col-4 text-center">Fecha</th>
                        <th class="col-4 text-center">Observaciones</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    while($historial = mysqli_fetch_assoc($historiales)) {
                ?>
                    <tr class="d-flex justify-content-around">
                        <td class="col-4 text-center"><?= $historial['idinformes_varones'] ?></td>
                        <td class="col-4 text-center"><?= $historial['fecha'] ?></td>
                        <td class="col-4 text-center"><?= $historial['observaciones'] ?></td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</main>