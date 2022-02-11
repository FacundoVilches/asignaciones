<?php

require 'funciones/conexion.php';
require 'funciones/varones.php';
$perfil = verVaronID();
include 'includes/index.html';

?>

<main class="container">
    <h1 class="m-5">Agregar nuevo informe para <?= $perfil['nombre']?></h1>

    <div class="alert">

        <form action="crearInforme.php?idvarones=<?=$perfil['idvarones']?>"" method="post">

            <div class="form-group">
                <div class="row mx-auto">
                    <div class="col-3">
                        <label for="fecha">Fecha</label>
                        <input type="date" placeholder="Seleccionar una fecha" name="fecha" class="form-control" required>
                    </div>
                    <div class="col-9">
                        <label for="observaciones">Observaciones</label>
                        <div class="form-floating col-lg-10">
                            <textarea cols="20" rows="10" name="observaciones" placeholder="Escribir una descripción" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <input type="hidden" name="idvarones" value="<?=$perfil['idvarones']?>">
            <button class="btn btn-dark m-3">Agregar</button>
            <a href="verPerfilVaron.php?idvarones=<?=$perfil['idvarones']?>" class="btn btn-outline m-3">Volver</a>
        </form>

    </div>
</main>