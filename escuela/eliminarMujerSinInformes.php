<?php
require '../sesion/config.php';
require '../funciones/autenticacion.php';
autenticar();
require '../funciones/conexion.php';
require '../funciones/mujeres.php';
$chequeo = eliminarMujerSinInformes();
include '../includes/index.html';

?>

<div class="container m-5">

    <h1 class="m-5">Baja de mujer matriculada</h1>

    <?php
        if($chequeo){
    ?>
        <div class="row alert alert-success mx-auto">
            <div class="col d-flex justify-content-center align-items-center">
                <h3>Eliminada correctamente!</h3>
            </div>
        </div>
        <div class="row">
            <div class="col d-flex justify-content-end align-items-center">
                <a href="listaMujeres.php" class="btn btn-outline-secondary btn-md fw-bold"><i class="fas fa-arrow-left"></i> Volver
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
                <a href="listaMujeres.php" class="btn btn-outline-secondary btn-md fw-bold"><i class="fas fa-arrow-left"></i> Volver
                </a>
            </div>
        </div>
    <?php
    }
    ?>

</div>