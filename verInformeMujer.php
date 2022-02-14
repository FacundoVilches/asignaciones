<?php

require 'funciones/conexion.php';
require 'funciones/informesMujeres.php';
$informe = verInformePorID();
include 'includes/index.html';

?>

<main class="container m-5">

    <h1 class="m-5">Datos del informe</h1>
    <div class="alert shadow">
        <div class="row m-3">
            <div class="col d-flex justify-content-end">
                <span id="negrita">Informe número:</span>
            </div>
            <div class="col d-flex justify-content-start align-items-center">
                <span id="negrita">#<?= $informe['idinformes_mujeres'] ?></span>
            </div>
        </div>
        <div class="row m-3">
            <div class="col d-flex justify-content-end">
                <span id="negrita">Nombre:</span>
            </div>
            <div class="col d-flex justify-content-start align-items-center">
                <span id="negrita"><?= $informe['nombre'] ?></span>
            </div>
        </div>
        <div class="row m-3">
            <div class="col d-flex justify-content-end">
                <span id="negrita">Fecha:</span>
            </div>
            <div class="col d-flex justify-content-start align-items-center">
                <span id="negrita"><?= $informe['fecha'] ?></span>
            </div>
        </div>
        <div class="row m-3">
            <div class="col d-flex justify-content-end">
                <span id="negrita">Tema:</span>
            </div>
            <div class="col d-flex justify-content-start align-items-center">
                <span id="negrita"><?= $informe['tema'] ?></span>
            </div>
        </div>
        <div class="row m-3">
            <div class="col d-flex justify-content-end">
                <span id="negrita">Sala:</span>
            </div>
            <div class="col d-flex justify-content-start align-items-center">
                <span id="negrita"><?= $informe['sala'] ?></span>
            </div>
        </div>
        <div class="row m-3">
            <div class="col d-flex justify-content-end">
                <span id="negrita">Observaciones:</span>
            </div>
            <?php
            if ($informe['observaciones'] != "") {
            ?>
                <div class="col d-flex justify-content-start align-items-center">
                    <span id="negrita"><?= $informe['observaciones'] ?></span>
                </div>
            <?php
            } else {
            ?>
                <div class="col d-flex justify-content-start align-items-center">
                    <span id="negrita">No hay observaciones</span>
                </div>
            <?php
            }
            ?>
        </div>
        <div class="row mx-auto p-3 d-flex justify-content-between">
            <div class="col text-center">
                <a href="formModificarInformeMujer.php?idinformes_mujeres=<?= $informe['idinformes_mujeres'] ?>" class="btn btn-outline-primary btn-md fw-bold"><i class="fas fa-marker"></i> Modificar</a>
            </div>
            <div class="col text-center">
                <a href="formEliminarInformeMujer.php?idinformes_mujeres=<?= $informe['idinformes_mujeres'] ?>" class="btn btn-outline-danger btn-md fw-bold"><i class="fas fa-trash-alt"></i> Eliminar</a>
            </div>
            <div class="col text-center">
                <a href="verPerfilMujer.php?idmujeres=<?= $informe['idmujeres'] ?>" class="btn btn-outline-secondary btn-md fw-bold"><i class="fas fa-arrow-left"></i> Volver a perfil</a>
            </div>
            <div class="col text-center">
                <a href="listaInformesMujeres.php" class="btn btn-outline-secondary btn-md fw-bold"><i class="fas fa-arrow-left"></i> Volver a informes</a>
            </div>
        </div>
    </div>

</main>