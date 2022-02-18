<?php
require 'sesion/config.php';
require 'funciones/autenticacion.php';
autenticar();
include 'includes/index.html';
require 'funciones/config.php';
require 'funciones/conexion.php';
$chequeo = borrarInformesMujeres();


?>

<div class="container m-5">

    <h1 class="m-5">Baja de informes de mujeres</h1>

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
                <a href="ajustes.php" class="btn btn-outline-secondary"><i class="fas fa-arrow-left"></i> Volver
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
                <a href="ajustes.php" class="btn btn-outline-secondary"><i class="fas fa-arrow-left"></i> Volver
                </a>
            </div>
        </div>
    <?php
    }
    ?>

</div>