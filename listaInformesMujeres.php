<?php

include 'includes/index.html';
include 'includes/nav.html';
require 'funciones/conexion.php';
require 'funciones/informesMujeres.php';

$informes = listaInformesMujeres();
$alertas = informesAlerta();
$noAsignados = noAsignados();
$cantidad = cantidadNoAsignados();


?>
<div class="container col-12">
    <h1 class="m-4">Informes de asignaciones de mujeres</h1>
    <div class="border bg-light mb-3 mx-2">
        <div class="row m-2">
            <div class="row mx-auto">
                <h4>Filtro de búsqueda <i class="fas fa-sort"></i></i></h4>
            </div>
            <form action="" method="POST" id="form">
                <div class="row mx-auto">
                    <div class="col-3 text-center">
                        <label for="">Nombre:</label>
                        <input class="form-control" type="text" name="nombre" id="nombre" placeholder="Insertar nombre">
                    </div>
                    <div class="col-3 text-center">
                        <label for="">Tema:</label>
                        <select class="form-select" name="tema" id="tema">
                            <option selected value="">Todos</option>
                            <option value="Primera conversación">Primera conversación</option>
                            <option value="Revisita">Revisita</option>
                            <option value="Curso bíblico">Curso bíblico</option>
                            <option value="Otro">Otro</option>
                        </select>
                    </div>
                    <div class="col-3 text-center">
                        <label for="">Fecha:</label>
                        <input class="form-control" type="date" name="fecha" id="fecha">
                    </div>
                    <div class="col-2 text-center">
                        <label for="">Sala:</label>
                        <select class="form-select" name="sala" id="sala">
                            <option selected value="">Ambas</option>
                            <option value="Sala A">Sala A</option>
                            <option value="Sala B">Sala B</option>
                        </select>
                    </div>
                    <div class="col-1 d-flex align-items-end justify-content-center px-0">
                        <button id="enviar" onclick="vacio();" class="btn btn-outline-dark btn-md fw-bold"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row mx-auto">
        <div class="col-5">
            <table class="table table-hover table-borderless table-striped text-center">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($informe = mysqli_fetch_assoc($informes)) {
                    ?>
                        <tr>
                            <td><?= $informe['idinformes_mujeres'] ?></td>
                            <td> <a href="verPerfilMujer.php?idmujeres=<?= $informe['idmujeres'] ?>"  id="link"><?= $informe['nombre'] ?></a> </td>
                            <td><?= $informe['fecha'] ?></td>
                            <td>
                                <a href="verInformeMujer.php?idinformes_mujeres= <?= $informe['idinformes_mujeres'] ?>" class="btn btn-outline-dark btn-sm fw-bold"><i class="fas fa-eye"></i> Ver</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="col-4">
            <h3 class="text-center alert alert-danger mb-0">Alerta</h3>
            <table class="table table-hover table-borderless table-striped text-center">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Última asignación</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($alerta = mysqli_fetch_assoc($alertas)) {
                    ?>
                        <tr>
                            <td> <a href="verPerfilMujer.php?idmujeres=<?= $alerta['idmujeres'] ?>"  id="link"> <?= $alerta['nombre'] ?></a></td>
                            <?php
                            if ($alerta['fecha'] == 0) {
                            ?>
                                <td>Hoy</td>
                            <?php
                            } else if ($alerta['fecha'] <= -2) {
                            ?>
                                <td>Será en <?= abs($alerta['fecha']) ?> días</td>
                            <?php
                            } else if ($alerta['fecha'] == -1) {
                            ?>
                                <td>Será en <?= abs($alerta['fecha']) ?> día</td>
                            <?php
                            } else if ($alerta['fecha'] == 1) {
                            ?>
                                <td>Hace <?= $alerta['fecha'] ?> día</td>
                            <?php
                            } else {
                            ?>
                                <td>Hace <?= $alerta['fecha'] ?> días</td>
                            <?php
                            }
                            ?>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <div class="col-3">
            <h3 class="text-center alert alert-info mb-0">No asignadas</h3>
            <table class="table table-hover table-borderless table-striped text-center">
                <thead>
                    <tr>
                        <th>Nombre</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    if ($cantidad == 0) {
                    ?>
                        <tr>
                            <td class="text-success">Ninguna matriculada quedó sin asignar</td>
                        </tr>
                        <?php
                    } else {
                        while ($noAsignado = mysqli_fetch_assoc($noAsignados)) {
                        ?>
                            <tr>
                                <td> <a href="verPerfilMujer.php?idmujeres=<?= $noAsignado['idmujeres'] ?> "  id="link"><?= $noAsignado['nombre'] ?></a></td>
                            </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>

    </div>

</div>
<script type="text/javascript">
    function vacio() {
        if ($('#nombre').val() == '' && $('#fecha').val() == '' && $('#sala').val() == '' && $('#tema').val() == '') {
            $('#form').attr('action', '');
            var resultado = true
        } else {
            $('#form').attr('action', 'filtroListaInformesMujeres.php');
            var resultado = false
        }
    }
</script>
</body>
</html>