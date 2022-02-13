<?php

require 'funciones/conexion.php';
require 'funciones/informesVarones.php';
$datos = verInformePorID();
include 'includes/index.html';

?>

<main class="container m-5">
    <h1 class="m-5">Modificar datos de informe <?= $datos['nombre'] ?></h1>
    <div class="row mx-auto d-flex justify-content-center">
        <div class="alert shadow col-10">
            <form action="modificarInformeVaron.php" method="post">
                <div class="form-group">
                    <div class="row mx-auto d-flex justify-content-center">
                        <div class="col-3">
                            <label for="fecha" id="negrita" class="m-2">Fecha (*)</label>
                            <input type="date" name="fecha" value="<?= $datos['fecha'] ?>" class="form-control" required>
                        </div>
                        <div class="col-3">
                            <label for="tema" id="negrita" class="m-2">Tema (*)</label>
                            <select name="tema" class="form-select" required>
                                <option selected value="<?= $datos['tema'] ?>"><?= $datos['tema'] ?></option>
                                <option value="">Seleccione un tema</option>
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
                                <option selected value="<?= $datos['sala'] ?>"><?= $datos['sala'] ?></option>
                                <option value="">Seleccione una sala</option>
                                <option value="Sala A">Sala A</option>
                                <option value="Sala B">Sala B</option>
                            </select>
                        </div>
                    </div>
                    <div class="row d-flex mx-auto justify-content-center m-4">
                        <div class="col-9">
                            <div class="form-group">
                                <label for="observaciones" id="negrita" class="m-2">Observaciones:</label>
                                <textarea name="observaciones" placeholder="Ingrese una observación.." class="form-control" rows="3"><?= $datos['observaciones'] ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="idinformes_varones" value="<?= $datos['idinformes_varones'] ?>">
                <div class="row m-2">
                    <div class="col">
                        <button class="btn btn-outline-success m-3"><i class="fas fa-check"></i> Confirmar</button>
                        <a href="verInformeVaron.php?idinformes_varones=<?= $datos['idinformes_varones'] ?>" class="btn btn-outline-secondary m-3"><i class="fas fa-arrow-left"></i> Volver</a>
                    </div>
                </div>
            </form>

        </div>
    </div>
</main>