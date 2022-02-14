<?php

require 'funciones/conexion.php';
require 'funciones/mujeres.php';
$datos = verMujerID();
include 'includes/index.html';

?>

<main class="container m-5">
    <h1 class="m-5">Modificar datos de <?= $datos['nombre'] ?></h1>
    <div class="row justify-content-center">


        <div class="alert shadow col-8">
            <form action="modificarMujer.php" method="post" class="mx-auto">
                <div class="form-group">
                    <div class="row d-flex justify-content-center">
                        <div class="col-6 m-3">
                            <label for="nombre">Nombre (*)</label>
                            <input type="text" name="nombre" class="form-control" value="<?= $datos['nombre'] ?>" required>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-6 m-3">
                            <label for="contacto">Contacto</label>
                            <input type="text" name="contacto" value="<?= $datos['contacto'] ?>" class="form-control">
                        </div>
                    </div>
                </div>
                <input type="hidden" name="idmujeres" value="<?= $datos['idmujeres'] ?>">

                <div class="row mx-auto d-flex justify-content-between">
                    <div class="col text-center">
                        <button class="btn btn-outline-success btn-md m-3"><i class="fas fa-check"></i> Modificar</button>
                    </div>
                    <div class="col text-center">
                        <a href="verPerfilMujer.php?idmujeres=<?= $datos['idmujeres'] ?>" class="btn btn-outline-secondary btn-md m-3"><i class="fas fa-arrow-left"></i> Volver a perfil</a>
                    </div>
                    <div class="col text-center">
                        <a href="listaMujeres.php" class="btn btn-md btn-outline-secondary m-3"><i class="fas fa-arrow-left"></i> Volver a lista</a>
                    </div>
                </div>
        </div>
    </div>
    </form>
</main>