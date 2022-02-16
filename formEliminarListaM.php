<?php

include 'includes/index.html';

?>

<main class="container m-5">

    <h1 class="m-5">Baja de lista de mujeres</h1>

    <div class="alert shadow">
        <h1 class="m-5 text-center text-danger"><i class="fa-solid fa-triangle-exclamation"></i> Se eliminarán a todas las mujeres matriculadas <i class="fa-solid fa-triangle-exclamation"></i></h1>
        <h1 class="m-5 text-center text-danger">¿Eliminar de todos modos?</h1>

        <form action="eliminarListaVarones.php" method="post">
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