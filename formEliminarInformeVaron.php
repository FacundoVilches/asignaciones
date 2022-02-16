<?php

require 'funciones/conexion.php';
require 'funciones/informesVarones.php';
$datos = verInformePorID();
include 'includes/index.html';

?>

<main class="container m-5">

    <h1 class="m-5">Baja de informe de <?= $datos['nombre']  ?></h1>


    <div class="alert shadow">
        <h2 class="m-5 text-center text-danger">Se eliminarán el informe con los siguientes datos:</h2>
        <div class="row">
            <div class="col d-flex justify-content-end">
                <span id="negrita">Número de informe:</span>
            </div>
            <div class="col d-flex justify-content-start align-items-center">
                <span id="negrita">#<?= $datos['idinformes_varones'] ?></span>
            </div>
        </div>
        <div class="row">
            <div class="col d-flex justify-content-end">
                <span id="negrita"><span id="negrita">Fecha:</span>
            </div>
            <div class="col d-flex justify-content-start align-items-center">
                <span id="negrita"><?php $datos['fecha'];
                                    $convertir = strtotime($datos['fecha']);
                                    $nuevoFormato = date('d-m-Y', $convertir);
                                    echo $nuevoFormato; ?></span>
            </div>
        </div>
        <div class="row">
            <div class="col d-flex justify-content-end">
                <span id="negrita">Tema:</span>
            </div>
            <div class="col d-flex justify-content-start align-items-center">
                <span id="negrita"><?= $datos['tema'] ?></span>
            </div>
        </div>
        <div class="row">
            <div class="col d-flex justify-content-end align-items-center">
                <span id="negrita">Sala:</span>
            </div>
            <div class="col d-flex justify-content-start align-items-center">
                <span id="negrita"><?= $datos['sala'] ?></span>
            </div>
        </div>
        <div class="row">
            <div class="col d-flex justify-content-end">
                <span id="negrita">Observaciones:</span>
            </div>
            <?php
            if ($datos['observaciones'] != "") {
            ?>
                <div class="col d-flex justify-content-start align-items-center">
                    <span id="negrita"><?= $datos['observaciones'] ?></span>
                </div>
            <?php
            } else {
            ?>
                <div class="col d-flex justify-content-start align-items-center">
                    <span id="negrita">Sin observaciones</span>
                </div>
            <?php
            }
            ?>
        </div>

        <h2 class="m-5 text-center text-danger">¿Eliminar de todos modos?</h2>

        <form action="eliminarInformeVaron.php" method="post">
            <input type="hidden" name="idinformes_varones" value="<?= $datos['idinformes_varones'] ?>">
            <div class="row">
                <div class="col text-center">
                    <button class="btn btn-outline-danger btn-md fw-bold"><i class="fas fa-check"></i> Eliminar</button>
                </div>
                <div class="col text-center">
                    <a href="verInformeVaron.php?idinformes_varones=<?= $datos['idvarones'] ?>" class="btn btn-outline-secondary btn-md fw-bold"><i class="fas fa-arrow-left"></i> Volver a ver informe</a>
                </div>
                <div class="col text-center">
                    <a href="verPerfilVaron.php?idvarones=<?= $datos['idvarones'] ?>" class="btn btn-outline-secondary btn-md fw-bold"><i class="fas fa-arrow-left"></i> Ir a perfil</a>
                </div>
                <div class="col text-center">
                    <a href="listaInformesVarones.php" class="btn btn-outline-secondary btn-md fw-bold"><i class="fas fa-arrow-left"></i> Ir a informes</a>
                </div>
            </div>

        </form>

    </div>


</main>