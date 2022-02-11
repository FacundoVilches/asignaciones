<?php

require 'funciones/conexion.php';
require 'funciones/informes.php';
require 'funciones/varones.php';
$chequeo = agregarInforme();
$perfil = verVaronID();
include 'includes/index.html';

?>

<main class="container">

    <h1>Agregar informe</h1>

    <?php

    if ($chequeo == true) {

    ?>

        <div class="alert alert-success mx-auto">
            Agregado correctamente
            <a href="verPerfilVaron.php?idvarones=<?= $perfil['idvarones'] ?> " class="btn btn-light m-2">Volver</a>
        </div>

    <?php
    } else {
    ?>
        <div class="alert alert-danger mx-auto">
            Error!
            <a href="verPerfilVaron.php?idvarones=<?= $perfil['idvarones'] ?> " class="btn btn-light m-2">Volver</a>
        </div>
    <?php
    }
    ?>

</main>