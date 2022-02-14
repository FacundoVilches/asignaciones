<?php

require 'funciones/conexion.php';
require 'funciones/mujeres.php';
require 'funciones/informesMujeres.php';
$datos = verMujerID();
$cantidad = cantidadAsignaciones();
include 'includes/index.html';

?>

<main class="container m-5">

    <h1 class="m-5">Baja de mujer matriculada</h1>

    <div class="alert bg-ligth p-4 col-8 mx-auto shadow text-dark text-center">
        Se eliminarán las asignaciones y los datos relacionados a: <br>
        <span id="negrita"><?= $datos['nombre'] ?></span>
        <br><br>
        <span>¿Eliminar de todos modos?</span>

        <?php
        if ($cantidad != 0) {
        ?>
            <form action="eliminarMujerConInformes.php" method="post">
                <input type="hidden" name="idmujeres" value="<?= $datos['idmujeres'] ?>">
                <div class="row mx-auto d-flex justify-content-between m-3">
                    <div class="col text-center">
                        <button class="btn btn-outline-danger m-3"><i class="fas fa-check"></i> Eliminar</button>
                    </div>
                    <div class="col text-center">
                        <a href="verPerfilMujer.php?idmujeres=<?= $datos['idmujeres'] ?>" class="btn btn-outline-secondary btn-md m-3"><i class="fas fa-arrow-left"></i> Volver a perfil</a>
                    </div>
                    <div class="col text-center">
                        <a href="listaMujeres.php" class="btn btn-md btn-outline-secondary m-3"><i class="fas fa-arrow-left"></i> Volver a lista</a>
                    </div>
                </div>
            </form>
        <?php
        } else {
        ?>
            <form action="eliminarMujerSinInformes.php" method="post">
                <input type="hidden" name="idmujeres" value="<?= $datos['idmujeres'] ?>">
                <div class="row mx-auto d-flex justify-content-between m-3">
                    <div class="col text-center">
                        <button class="btn btn-outline-danger m-3"><i class="fas fa-check"></i> Eliminar</button>
                    </div>
                    <div class="col text-center">
                        <a href="verPerfilMujer.php?idmujeres=<?= $datos['idmujeres'] ?>" class="btn btn-outline-secondary btn-md m-3"><i class="fas fa-arrow-left"></i> Volver a perfil</a>
                    </div>
                    <div class="col text-center">
                        <a href="listaMujeres.php" class="btn btn-md btn-outline-secondary m-3"><i class="fas fa-arrow-left"></i> Volver a lista</a>
                    </div>
                </div>
            </form>
        <?php
        }
        ?>
    </div>


</main>