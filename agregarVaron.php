<?php

require 'funciones/conexion.php';
require 'funciones/varones.php';
$chequeo = agregarVaron();
include 'includes/index.html';

?>

<main class="container">

    <h1>Alta de un varón</h1>

    <?php

    if ($chequeo == true) {

    ?>

        <div class="alert alert-success mx-auto">
            Agregado correctamente
            <a href="listaVarones.php" class="btn btn-light m-2">Volver</a>
        </div>

    <?php
    } else {
    ?>
        <div class="alert alert-danger mx-auto">
            Error!
            <a href="listaVarones.php" class="btn btn-light m-2">Volver</a>
        </div>
    <?php
    }
    ?>

</main>