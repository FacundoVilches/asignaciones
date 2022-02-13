<?php

require 'funciones/conexion.php';
require 'funciones/varones.php';
require 'funciones/informesVarones.php';
$perfil = verVaronID();
$historiales = verHistorial();
$cantidad = cantidadAsignaciones();
include 'includes/index.html';
include 'includes/nav.html';

?>

<main class="container col-12">
    <h1 class="m-4">Perfil</h1>
    <div class="row">
        <div class="col-6 mx-auto centrado">
            <img src="img/user.jpg" id="foto-perfil" class="border-radius img-fluid" alt="">
        </div>
    </div>
    <div class="row mx-auto">
        <div class="col m-2">
            <table class="table table-borderless">
                <thead>
                    <tr class="d-flex justify-content-around" id="negrita">
                        <th class="col-4 text-center">#</th>
                        <th class="col-4 text-center">Nombre</th>
                        <th class="col-4 text-center">Contacto</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="d-flex justify-content-around">
                        <td class="col-4 text-center">
                            <h5><?= $perfil['idvarones'] ?></h5>
                        </td>
                        <td class="col-4 text-center">
                            <h5><?= $perfil['nombre'] ?></h5>
                        </td>
                        <?php
                        if ($perfil['contacto'] != "") {
                        ?>
                            <td class="col-4 text-center">
                                <h5><?= $perfil['contacto'] ?></h5>
                            </td>
                        <?php
                        } else {
                        ?>
                            <td class="col-4 text-center">
                                <h5 class="text-danger">No se proporcionó ningún contacto</h5>
                            </td>
                        <?php
                        }
                        ?>
                    </tr>
                </tbody>
            </table>
            <div class="d-flex justify-content-between m-5">
                <a href="formModificarVaron.php?idvarones=<?= $perfil['idvarones'] ?> " class="btn btn-outline-primary btn-md fw-bold"><i class="fas fa-marker"></i> Modificar</a>
                <a href="formEliminarVaron.php?idvarones=<?= $perfil['idvarones'] ?>" class="btn btn-outline-danger btn-md fw-bold"><i class="fas fa-trash-alt"></i> Eliminar</a>
            </div>

        </div>
    </div>
    
    <hr>
    <br>

    <div class="row">
        <div class="col-9">
            <h1 class="">Historial de asignaciones - Cantidad: <?= $cantidad ?></h1>
        </div>
        <div class="col-3 d-flex justify-content-center align-items-center">
            <a href="formCrearInformeVaron.php?idvarones=<?= $perfil['idvarones'] ?> " class="btn btn-outline-success btn-md fw-bold"><i class="fas fa-plus"></i> Crear informe</a>
        </div>


    </div>

    <div class="row mx-auto">
        <div class="col m-2">
            <table class="table table-borderless table-hover table-striped text-center">
                <thead>
                    <tr class="d-flex justify-content-around" id="negrita">
                        <th class="col-1 text-center">#</th>
                        <th class="col-2 text-center">Fecha</th>
                        <th class="col-2 text-center">Tema</th>
                        <th class="col-1 text-center">Sala</th>
                        <th class="col-5 text-center">Observaciones</th>
                        <th class="col-1"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    if ($cantidad == 0) {
                    ?>
                        <tr>
                            <td class="col-4 text-center text-danger">
                                <h5>No hay registros</h5>
                            </td>
                        </tr>
                        <?php

                    } else {
                        while ($historial = mysqli_fetch_assoc($historiales)) {
                        ?>

                            <tr class="d-flex justify-content-around">
                                <td class="col-1 text-center">
                                    <h5><?= $historial['idinformes_varones'] ?></h5>
                                </td>
                                <td class="col-2 text-center">
                                    <h5><?= $historial['fecha'] ?></h5>
                                </td>
                                <td class="col-2 text-center">
                                    <h5><?= $historial['tema'] ?></h5>
                                </td>
                                <td class="col-1 text-center">
                                    <h5><?= $historial['sala'] ?></h5>
                                </td>
                                <?php
                                if ($historial['observaciones'] != "") {
                                ?>
                                    <td class="col-5">
                                        <h5 class="text-success font-weight-bold"><?= $historial['observaciones'] ?></h5>
                                    </td>
                                    <td class="col-1">
                                        <a href="verInformeVaron.php?idinformes_varones=<?= $historial['idinformes_varones'] ?> " class="btn btn-outline-dark btn-sm fw-bold"><i class="fas fa-eye"></i> Ver</a>
                                    </td>
                                <?php
                                } else {
                                ?>
                                    <td class="col-5 text-center">
                                        <h5 class="text-danger font-weight-bold">NO hay</h5>
                                    </td>
                                    <td class="col-1">
                                        <a href="verInformeVaron.php?idinformes_varones=<?= $historial['idinformes_varones'] ?> " class="btn btn-outline-dark btn-sm fw-bold"> <i class="fas fa-eye"></i> Ver</a>
                                    </td>
                                <?php
                                }
                                ?>
                            </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <br>

</main>