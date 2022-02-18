<?php
require 'sesion/config.php';
require 'funciones/autenticacion.php';
autenticar();
include 'includes/index.html';

?>

<main class="container m-5">

    <h1 class="m-5">Baja de informes de varones</h1>

    <div class="alert shadow">
        <h1 class="m-5 text-center text-danger"><i class="fa-solid fa-triangle-exclamation"></i> Se eliminarán todos los informes de varones <i class="fa-solid fa-triangle-exclamation"></i></h1>
        <h1 class="m-5 text-center text-danger">¿Eliminar de todos modos?</h1>

        <form action="eliminarInformesVarones.php" method="post">
            <div class="row">
                <div class="col text-center">
                    <button class="btn btn-outline-danger btn-md fw-bold"><i class="fa-solid fa-check"></i> Confirmar</button>
                </div>
                <div class="col text-center">
                    <a href="ajustes.php" class="btn btn-outline-secondary btn-md fw-bold"><i class="fas fa-arrow-left"></i> Volver</a>
                </div>
            </div>


        </form>
    </div>
</main>