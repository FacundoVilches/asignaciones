<?php

include 'includes/index.html';
include 'includes/nav.html';

?>

<main class="container">
    <div class="row">
        <div class="col">
            <h1 class="m-2 p-2">Ajustes del sistema</h1>
        </div>
    </div>

    <div class="col mt-5 text-center">
        <a href="formEliminarListaV.php" class="btn btn-lg btn-outline-primary m-4"><i class="fa-solid me-3 fa-user-xmark"></i>ELIMINAR LISTA DE VARONES</a>
    </div>
    <div class="col text-center">
        <a href="formEliminarListaM.php" class="btn btn-lg btn-outline-danger m-4"><i class="fa-solid me-3 fa-user-xmark"></i>ELIMINAR LISTA DE MUJERES</a>
    </div>
    <hr>
    <div class="col text-center">
        <a href="formEliminarListaV.php" class="btn btn-lg btn-outline-primary m-4"><i class="fa-solid me-3 fa-circle-minus"></i>ELIMINAR INFORMES DE VARONES</a>
    </div>
    <div class="col text-center">
        <a href="formEliminarListaM.php" class="btn btn-outline-danger btn-lg m-4"><i class="fa-solid me-3 fa-circle-minus"></i>ELIMINAR INFORMES DE MUJERES</a>
    </div>
    <hr>
    <div class="col text-center">
        <a href="config.php" class="btn btn-outline-dark btn-lg m-4"><i class="fa-solid me-3 fa-power-off"></i>REINICIAR EL SISTEMA</a>
    </div>
    <div class="col alert alert-info mt-4 text-center">
        Ante cualquier inconveniente, comunicarse con el desarrollador <i class="fa-solid fa-circle-exclamation"></i>
    </div>

</main>