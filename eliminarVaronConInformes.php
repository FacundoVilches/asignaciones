<?php

require 'funciones/conexion.php';
require 'funciones/varones.php';
$chequeo = eliminarVaronConInformes();
include 'includes/index.html';

?>

<div class="container m-5">

    <h1 class="m-5">Baja de varón matriculado</h1>

    <?php
        if($chequeo){
    ?>
        <div class="row alert alert-success mx-auto">
            <div class="col d-flex justify-content-center align-items-center">
                <h3>Eliminado correctamente!</h3>
            </div>
        </div>
        <div class="row">
            <div class="col d-flex justify-content-end align-items-center">
                <a href="listaVarones.php" class="btn btn-outline-secondary btn-md fw-bold">
                    Volver
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
                <a href="listaVarones.php" class="btn btn-outline-secondary btn-md fw-bold">
                    Volver
                </a>
            </div>
        </div>
    <?php
    }
    ?>

</div>