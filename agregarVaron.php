<?php
require 'funciones/conexion.php';
require 'funciones/varones.php';
$chequeo = agregarVaron();
include 'includes/index.html';
?>

<main class="container m-5">

    <h1 class="m-5">Alta de un varón</h1>

    <?php
    if ($chequeo == true) {
    ?>
        <div class="row alert alert-success mx-auto">
            <div class="col d-flex justify-content-center align-items-center">
                <h3>Agregado correctamente!</h3>
            </div>
        </div>
        <div class="row">
            <div class="col d-flex justify-content-end align-items-center">
                <a href="listaVarones.php" class="btn btn-outline-secondary"><i class="fas fa-arrow-left btn-md fw-bold"></i> Volver
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
                <a href="listaVarones.php" class="btn btn-outline-secondary btn-md fw-bold"><i class="fas fa-arrow-left"></i> Volver
                </a>
            </div>
        </div>
    <?php
    }
    ?>
</main>