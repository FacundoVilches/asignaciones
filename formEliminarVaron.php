<?php
require 'sesion/config.php';
require 'funciones/autenticacion.php';
autenticar();
require 'funciones/conexion.php';
require 'funciones/varones.php';
require 'funciones/informesVarones.php';
$datos = verVaronID();
$cantidad = cantidadAsignaciones();
include 'includes/index.html';

?>

<main class="container m-5">

    <h1 class="m-5">Baja de varón matriculado</h1>

    <div class="alert bg-ligth p-4 col-8 mx-auto shadow text-dark text-center">
        Se eliminarán las asignaciones y los datos relacionados a: <br>
        <span id="negrita"><?= $datos['nombre'] ?></span>
        <br><br>
        <span>¿Eliminar de todos modos?</span>

        <?php
        if ($cantidad != 0) {
        ?>
            <form action="eliminarVaronConInformes.php" method="post">
                <input type="hidden" name="idvarones" value="<?= $datos['idvarones'] ?>">
                <div class="row mx-auto d-flex justify-content-between m-3">
                    <div class="col text-center">
                        <button class="btn btn-outline-danger m-3 btn-md fw-bold"><i class="fas fa-check"></i> Eliminar</button>
                    </div>
                    <div class="col text-center">
                        <a href="verPerfilVaron.php?idvarones=<?= $datos['idvarones'] ?>" class="btn btn-outline-secondary btn-md fw-bold m-3"><i class="fas fa-arrow-left"></i> Volver a perfil</a>
                    </div>
                    <div class="col text-center">
                        <a href="listaVarones.php" class="btn btn-md fw-bold btn-outline-secondary m-3"><i class="fas fa-arrow-left"></i> Volver a lista</a>
                    </div>
                </div>
            </form>
        <?php
        } else {
        ?>
            <form action="eliminarVaronSinInformes.php" method="post">
                <input type="hidden" name="idvarones" value="<?= $datos['idvarones'] ?>">
                <div class="row mx-auto d-flex justify-content-between m-3">
                    <div class="col text-center">
                        <button class="btn btn-outline-danger m-3 btn-md fw-bold"><i class="fas fa-check"></i> Eliminar</button>
                    </div>
                    <div class="col text-center">
                        <a href="verPerfilVaron.php?idvarones=<?= $datos['idvarones'] ?>" class="btn btn-outline-secondary btn-md fw-bold m-3"><i class="fas fa-arrow-left"></i> Volver a perfil</a>
                    </div>
                    <div class="col text-center">
                        <a href="listaVarones.php" class="btn btn-md fw-bold btn-outline-secondary m-3"><i class="fas fa-arrow-left"></i> Volver a lista</a>
                    </div>
                </div>
            </form>
        <?php
        }
        ?>
    </div>


</main>