<?php

require 'funciones/conexion.php';
require 'funciones/informesMujeres.php';
$datos = verInformePorID();
include 'includes/index.html';

?>

<main class="container m-5">
    <h1 class="m-5">Modificar datos de informe <?= $datos['nombre'] ?></h1>
    <div class="row mx-auto d-flex justify-content-center">
        <div class="alert shadow col-10">
            <form action="modificarInformeMujer.php" method="post">
                <div class="form-group">
                    <div class="row mx-auto d-flex justify-content-center">
                        <div class="col-3">
                            <label for="fecha" id="negrita" class="m-2">Fecha (*)</label>
                            <input type="date" name="fecha" value="<?= $datos['fecha'] ?>" class="form-control" required>
                        </div>
                        <div class="col-4">
                            <label for="tema" id="negrita" class="m-2">Tema (*)</label>
                            <select name="tema" class="form-select" required>
                            <?php
                                if($datos['tema'] == "Primera conversación"){
                                ?>
                                    <option selected value="<?= $datos['tema'] ?>"><?= $datos['tema'] ?></option>
                                    <option value="Revisita">Revisita</option>
                                    <option value="Curso bíblico">Curso bíblico</option>
                                    <option value="Otro">Otro</option>
                                <?php
                                } else if($datos['tema'] == "Revisita"){
                                ?>
                                    <option value="Primera conversación">Primera conversación</option>
                                    <option selected value="<?= $datos['tema'] ?>"><?= $datos['tema'] ?></option>
                                    <option value="Curso bíblico">Curso bíblico</option>
                                    <option value="Otro">Otro</option>
                                <?php
                                } else if($datos['tema'] == "Curso bíblico"){
                                ?>
                                    <option value="Primera conversación">Primera conversación</option>
                                    <option value="Revisita">Revisita</option>
                                    <option selected value="<?= $datos['tema'] ?>"><?= $datos['tema'] ?></option>
                                    <option value="Otro">Otro</option>
                                <?php
                                } else if($datos['tema'] == "Otro") {
                                ?>
                                    <option value="Primera conversación">Primera conversación</option>
                                    <option value="Revisita">Revisita</option>
                                    <option value="Curso bíblico">Curso bíblico</option>
                                    <option selected value="<?= $datos['tema'] ?>"><?= $datos['tema'] ?></option>
                                <?php
                                }
                                ?>
                            </select>

                        </div>
                        <div class="col-3">
                            <label for="fecha" id="negrita" class="m-2">Sala (*)</label>
                            <select name="sala" class="form-select" required>
                                <?php
                                if ($datos['sala'] == "Sala A") {
                                ?>
                                    <option selected value="<?= $datos['sala'] ?>"><?= $datos['sala'] ?></option>
                                    <option value="Sala B">Sala B</option>
                                <?php
                                } else if ($datos['sala'] == "Sala B") {
                                ?>
                                    <option value="Sala A">Sala A</option>
                                    <option selected value="<?= $datos['sala'] ?>"><?= $datos['sala'] ?></option>

                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row d-flex mx-auto justify-content-center m-4">
                        <div class="col-10">
                            <div class="form-group">
                                <label for="observaciones" id="negrita" class="m-2">Observaciones:</label>
                                <textarea name="observaciones" placeholder="Ingrese una observación.." class="form-control" rows="3"><?= $datos['observaciones'] ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="idinformes_mujeres" value="<?= $datos['idinformes_mujeres'] ?>">
                <input type="hidden" name="idmujeres" value="<?= $datos['idmujeres'] ?>">
                <div class="row m-2 d-flex justify-content-between">
                    <div class="col text-center">
                        <button class="btn btn-outline-success m-3"><i class="fas fa-check"></i> Confirmar</button>
                    </div>
                    <div class="col text-center">
                        <a href="verInformeMujer.php?idinformes_mujeres=<?= $datos['idinformes_mujeres'] ?>" class="btn btn-outline-secondary m-3"><i class="fas fa-arrow-left"></i> Volver</a>
                    </div>

                </div>
        </div>
        </form>

    </div>
    </div>
</main>