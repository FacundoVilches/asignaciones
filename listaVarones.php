<?php

require 'funciones/conexion.php';
require 'funciones/varones.php';
$varones = listarVarones();
include 'includes/index.html';

?>

<div class="container col-12">
    <ul class="nav p-4 mx-auto bg-dark">
        <li class="nav-item m-4">
            <a href="index.php" class="nav-item text-decoration-none text-light">INICIO</a>
        </li>
        <li class="nav-item m-4">
            <a href="#" class="nav-item text-decoration-none text-light" >LISTA VARONES</a>
        </li>
        <li class="nav-item m-4">
            <a href="listaInformesVarones.php" class="nav-item text-decoration-none text-light" >INFORMES VARONES</a>
        </li>
    </ul>
    <div class="row">
        <div class="col-8">
            <h1 class="m-2 p-2">Varones matriculados</h1>
        </div>
        <div class="col-4 my-auto">
            <input type="text" placeholder="Insertar nombre o apellido">
            <input type="submit" value="Buscar">
        </div>
    </div>

    <table class="table table-hover table-borderless table-striped text-center">
        <thead>
            <tr>
                <th>#</th>
                <th colspan="4">Nombre</th>
                <th colspan="">
                    <a href="formAgregarVaron.php" class="btn btn-outline-secondary btn-sm fw-bold">Agregar</a>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($varon = mysqli_fetch_assoc($varones)) {
            ?>
                <tr>
                    <td><?= $varon['idvarones'] ?></td>
                    <td colspan="4"> <a href="verPerfilVaron.php?idvarones=<?= $varon['idvarones'] ?> " class="text-decoration-none" id="link"><?= $varon['nombre'] ?></a> </td>
                    <td>
                        <a href="formModificarVarones.php?idvarones=<?= $varon['idvarones']?>" class="btn btn-outline-secondary btn-sm fw-bold">Modificar</a>
                    </td>
                    <td>
                        <a href="" class="btn btn-outline-secondary btn-sm fw-bold">Eliminar</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>