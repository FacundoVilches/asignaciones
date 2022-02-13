<?php

require 'funciones/conexion.php';
require 'funciones/varones.php';
$perfil = verVaronID();
include 'includes/index.html';

?>

<main class="container m-5">
    <h1 class="m-5">Agregar nuevo informe para <?= $perfil['nombre'] ?></h1>

    <div class="alert mx-auto d-flex justify-content-center">

        <div class="alert shadow col-10">
            <form action="crearInforme.php?idvarones=<?= $perfil['idvarones'] ?>" method="post">

                <div class="form-group">
                    <div class="row mx-auto d-flex justify-content-center">
                        <div class="col-3">
                            <label for="fecha" id="negrita" class="m-2">Fecha (*)</label>
                            <input type="date" name="fecha" class="form-control" required>
                        </div>
                        <div class="col-3">
                            <label for="tema" id="negrita" class="m-2">Tema (*)</label>
                            <select name="tema" class="form-select" required>
                                <option selected value="">Seleccione un tema</option>
                                <option value="Lectura de la Biblia">Lectura de la Biblia</option>
                                <option value="Primera conversación">Primera conversación</option>
                                <option value="Revisita">Revisita</option>
                                <option value="Curso bíblico">Curso bíblico</option>
                                <option value="Discurso">Discurso</option>
                                <option value="Otro">Otro</option>
                            </select>

                        </div>
                        <div class="col-3">
                            <label for="fecha" id="negrita" class="m-2">Sala (*)</label>
                            <select name="sala" class="form-select" required>
                                <option selected value="">Seleccione una sala</option>
                                <option value="Sala A">Sala A</option>
                                <option value="Sala B">Sala B</option>
                            </select>
                        </div>
                    </div>
                    <div class="row d-flex mx-auto justify-content-center m-4">
                        <div class="col-9">
                            <div class="form-group">
                                <label for="observaciones" id="negrita" class="m-2">Observaciones:</label>
                                <textarea name="observaciones" placeholder="Ingrese una observación.." class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="idvarones" value="<?= $perfil['idvarones'] ?>">
                <div class="row m-2">
                    <div class="col">
                        <button class="btn btn-dark m-3">Agregar</button>
                        <a href="verPerfilVaron.php?idvarones=<?=$perfil['idvarones']?>" class="btn btn-outline border m-3">Volver</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>