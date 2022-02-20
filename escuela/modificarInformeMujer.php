<?php
require '../sesion/config.php';
require '../funciones/autenticacion.php';
autenticar();
require '../funciones/conexion.php';
require '../funciones/informesMujeres.php';
$chequeo = actualizarInforme();
include '../includes/index.html';

?>

<main class="container m-5">

    <h1 class="m-5">Modificación de un informe</h1>

    <?php

    if ($chequeo == true) {

    ?>

        <div class="row alert alert-success mx-auto">
            <div class="col d-flex justify-content-center align-items-center">
                <h3>Modificado correctamente!</h3>
            </div>
        </div>
        <div class="row">
            <div class="col d-flex justify-content-end align-items-center">
                <a href="listaInformesMujeres.php" class="btn btn-outline-secondary"><i class="fas fa-arrow-left"></i> Volver
                </a>
            </div>
        </div>

    <?php
    } else {
    ?>
        <div class="row alert alert-danger mx-auto">
            <div class="col d-flex justify-content-center align-items-center">
                <h3>Error!</h3>
            </div>
        </div>
        <div class="row">
            <div class="col d-flex justify-content-end align-items-center">
                <a href="listaInformesMujeres.php" class="btn btn-outline-secondary"><i class="fas fa-arrow-left"></i> Volver
                </a>
            </div>
        </div>
    <?php
    }
    ?>

</main>