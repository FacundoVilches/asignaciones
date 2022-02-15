<?php
include 'includes/index.html';
include 'includes/nav.html';
require 'funciones/conexion.php';
require 'funciones/informesVarones.php';
// $link = conectar();
$informes = listaInformesVarones();
$alertas = informesAlerta();
// $alertasFiltro = informesAlerta();
$noAsignados = noAsignados();
// $noAsignadosFiltro = noAsignados();
$cantidad = cantidadNoAsignados();

if (!isset($_POST['nombre'])) {
    $_POST['nombre'] = '';
}
if (!isset($_POST['fecha'])) {
    $_POST['fecha'] = '';
}
if (!isset($_POST['tema'])) {
    $_POST['tema'] = '';
}
if (!isset($_POST['sala'])) {
    $_POST['sala'] = '';
}

?>
<div class="container col-12">

    <h1 class="m-4">Informes de asignaciones de varones</h1>
    <div class="border bg-light mb-3 mx-2">
        <div class="row m-2">
            <div class="row mx-auto">
                <h4>Filtro de búsqueda <i class="fas fa-sort"></i></i></h4>
            </div>
            <!-- <form action="listaInformesVarones.php" method="POST"> -->

            <form id="form" action="">
                <div class="row mx-auto">
                    <div class="col-3 text-center">
                        <label for="">Nombre:</label>
                        <input class="form-control" type="text" name="nombre" id="nombre" placeholder="Insertar nombre o apellido" value="<?= $_POST['nombre'] ?>">
                    </div>
                    <div class="col-3 text-center">
                        <label for="">Tema:</label>
                        <select class="form-select" name="tema" id="tema">
                            <?php
                            if ($_POST['tema'] != '') {
                                if ($_POST['tema'] == 'Lectura de la Biblia') {
                            ?>
                                    <option value="">Todos</option>
                                    <option selected value="<?= $_POST['tema'] ?>"><?= $_POST['tema'] ?></option>
                                    <option value="Primera conversación">Primera conversación</option>
                                    <option value="Revisita">Revisita</option>
                                    <option value="Curso bíblico">Curso bíblico</option>
                                    <option value="Discurso">Discurso</option>
                                    <option value="Otro">Otro</option>
                                <?php
                                } else if ($_POST['tema'] == 'Primera conversación') {
                                ?>
                                    <option value="">Todos</option>
                                    <option value="Lectura de la Biblia">Lectura de la Biblia</option>
                                    <option selected value="<?= $_POST['tema'] ?>"><?= $_POST['tema'] ?></option>
                                    <option value="Revisita">Revisita</option>
                                    <option value="Curso bíblico">Curso bíblico</option>
                                    <option value="Discurso">Discurso</option>
                                    <option value="Otro">Otro</option>
                                <?php
                                } else if ($_POST['tema'] == 'Revisita') {
                                ?>
                                    <option value="">Todos</option>
                                    <option value="Lectura de la Biblia">Lectura de la Biblia</option>
                                    <option value="Primera conversación">Primera conversación</option>
                                    <option selected value="<?= $_POST['tema'] ?>"><?= $_POST['tema'] ?></option>
                                    <option value="Curso bíblico">Curso bíblico</option>
                                    <option value="Discurso">Discurso</option>
                                    <option value="Otro">Otro</option>
                                <?php
                                } else if ($_POST['tema'] == 'Curso bíblico') {
                                ?>
                                    <option value="">Todos</option>
                                    <option value="Lectura de la Biblia">Lectura de la Biblia</option>
                                    <option value="Primera conversación">Primera conversación</option>
                                    <option value="Revisita">Revisita</option>
                                    <option selected value="<?= $_POST['tema'] ?>"><?= $_POST['tema'] ?></option>
                                    <option value="Discurso">Discurso</option>
                                    <option value="Otro">Otro</option>

                                <?php
                                } else if ($_POST['tema'] == 'Discurso') {
                                ?>
                                    <option value="">Todos</option>
                                    <option value="Lectura de la Biblia">Lectura de la Biblia</option>
                                    <option value="Primera conversación">Primera conversación</option>
                                    <option value="Revisita">Revisita</option>
                                    <option value="Curso bíblico">Curso bíblico</option>
                                    <option selected value="<?= $_POST['tema'] ?>"><?= $_POST['tema'] ?></option>
                                    <option value="Otro">Otro</option>
                                <?php
                                } else if ($_POST['tema'] == 'Otro') {
                                ?>
                                    <option value="">Todos</option>
                                    <option value="Lectura de la Biblia">Lectura de la Biblia</option>
                                    <option value="Primera conversación">Primera conversación</option>
                                    <option value="Revisita">Revisita</option>
                                    <option value="Curso bíblico">Curso bíblico</option>
                                    <option value="Discurso">Discurso</option>
                                    <option selected value="<?= $_POST['tema'] ?>"><?= $_POST['tema'] ?></option>

                                <?php
                                }
                            } else {
                                ?>
                                <option selected value="">Todos</option>
                                <option value="Lectura de la Biblia">Lectura de la Biblia</option>
                                <option value="Primera conversación">Primera conversación</option>
                                <option value="Revisita">Revisita</option>
                                <option value="Curso bíblico">Curso bíblico</option>
                                <option value="Discurso">Discurso</option>
                                <option value="Otro">Otro</option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-2 text-center">
                        <label for="">Fecha:</label>
                        <input class="form-control" type="date" name="fecha" id="fecha" value="<?= $_POST['fecha'] ?>">
                    </div>
                    <div class="col-2 text-center">
                        <label for="">Sala:</label>
                        <select class="form-select" name="sala" id="sala">
                            <?php
                            if ($_POST['sala'] != '') {
                                if ($_POST['sala'] == 'Sala A') {
                            ?>
                                    <option value="">Ambas</option>
                                    <option selected value="<?= $_POST['sala'] ?>"><?= $_POST['sala'] ?></option>
                                    <option value="Sala B">Sala B</option>
                                <?php
                                } else {
                                ?>
                                    <option value="">Ambas</option>
                                    <option value="Sala A">Sala A</option>
                                    <option selected value="<?= $_POST['sala'] ?>"><?= $_POST['sala'] ?></option>
                                <?php
                                }
                            } else {
                                ?>

                                <option selected value="">Ambas</option>
                                <option value="Sala A">Sala A</option>
                                <option value="Sala B">Sala B</option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-2 d-flex align-items-end justify-content-center px-0">
                        <button id="enviar" class="btn btn-outline-dark btn-md fw-bold"><i class="fas fa-search"></i> Buscar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    
    <div id="busqueda" class="row mx-auto">
        
    </div>

    <div id="inicio" class="row mx-auto">
        <div class="col-5">
            <table id="total" class="table table-hover table-borderless table-striped text-center">
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
                            <td><?= $informe['idinformes_varones'] ?></td>
                            <td> <a href="verPerfilVaron.php?idvarones=<?= $informe['idvarones'] ?>" id="link"><?= $informe['nombre'] ?></a> </td>
                            <td><?php
                                $informe['fecha'];
                                $cambioFormato = strtotime($informe['fecha']);
                                $nuevoFormato = date('d-m-Y', $cambioFormato);
                                echo $nuevoFormato;
                                ?></td>
                            <td>
                                <a href="verInformeVaron.php?idinformes_varones= <?= $informe['idinformes_varones'] ?>" class="btn btn-outline-dark btn-sm fw-bold"><i class="fas fa-eye"></i> Ver</a>
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
                            <td> <a href="verPerfilVaron.php?idvarones=<?= $alerta['idvarones'] ?>" id="link"> <?= $alerta['nombre'] ?></a></td>
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
            <h3 class="text-center alert alert-info mb-0">No asignados</h3>
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
                            <td class="text-success">Ningún matriculado quedó sin asignar</td>
                        </tr>
                        <?php
                    } else {
                        while ($noAsignado = mysqli_fetch_assoc($noAsignados)) {
                        ?>
                            <tr>
                                <td>
                                    <a href="verPerfilVaron.php?idvarones=<?= $noAsignado['idvarones'] ?>" id="link"><?= $noAsignado['nombre'] ?></a>
                                </td>
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
    $('#enviar').click(function() {
        var nombre = document.getElementById('nombre').value
        var sala = document.getElementById('sala').value
        var fecha = document.getElementById('fecha').value
        var tema = document.getElementById('tema').value

        // var ruta = "Nom=" + nombre + "&Sala=" + sala + "&Fecha=" + fecha + "&Tema=" + tema

        var ruta = $('#form').serialize()

        $.ajax({
            url: 'filtradoInformesVarones.php',
            type: 'POST',
            data: ruta,
            success: function(res) {
                document.getElementById("busqueda").innerHTML = res
            }
        })

    })
</script>
</body>

</html>