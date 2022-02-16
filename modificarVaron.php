<?php

require 'funciones/conexion.php';
require 'funciones/varones.php';
$chequeo = actualizarVaron();
include 'includes/index.html';

?>

<main class="container m-5">

    <h1 class="m-5">Modificación de un varón</h1>

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
                <a href="listaVarones.php" class="btn btn-outline-secondary btn-md fw-bold"><i class="fas fa-arrow-left"></i> Volver
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