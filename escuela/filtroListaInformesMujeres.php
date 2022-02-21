<?php
require '../sesion/config.php';
require '../funciones/autenticacion.php';
autenticar();
include '../includes/index.html';
include '../includes/nav.php';
require '../funciones/conexion.php';
require '../funciones/informesMujeres.php';
require '../funciones/buscador.php';

$alertas = informesAlerta();
$noAsignados = noAsignados();
$cantidad = cantidadNoAsignados();
$busquedas = buscadorM();
$cantBusquedas = mysqli_num_rows($busquedas);
/*

$informes = listaInformesVarones();
$alertas = informesAlerta();
$noAsignados = noAsignados();
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
*/

?>

<div class="container col-12">

    <h1 class="m-4">Informes de asignaciones de varones</h1>
    <div class="border bg-light mb-3 mx-2">
        <div class="row m-2">
            <div class="row mx-auto">
                <h4>Filtro de búsqueda <i class="fas fa-sort"></i></i></h4>
            </div>
            <form action="" method="POST" id="form">
                <div class="row mx-auto">
                    <div class="col-3 text-center">
                        <label for="">Nombre:</label>
                        <input class="form-control" type="text" name="nombre" id="nombre" placeholder="Insertar nombre" value="<?= $_POST['nombre'] ?>">
                    </div>
                    <div class="col-3 text-center">
                        <label for="">Tema:</label>
                        <select class="form-select" name="tema" id="tema">
                            <?php
                            if ($_POST['tema'] != '') {
                                if ($_POST['tema'] == 'Primera conversación') {
                                ?>
                                    <option value="">Todos</option>
                                    <option selected value="<?= $_POST['tema'] ?>"><?= $_POST['tema'] ?></option>
                                    <option value="Revisita">Revisita</option>
                                    <option value="Curso bíblico">Curso bíblico</option>
                                    <option value="Otro">Otro</option>
                                <?php
                                } else if ($_POST['tema'] == 'Revisita') {
                                ?>
                                    <option value="">Todos</option>
                                    <option value="Primera conversación">Primera conversación</option>
                                    <option selected value="<?= $_POST['tema'] ?>"><?= $_POST['tema'] ?></option>
                                    <option value="Curso bíblico">Curso bíblico</option>
                                    <option value="Otro">Otro</option>
                                <?php
                                } else if ($_POST['tema'] == 'Curso bíblico') {
                                ?>
                                    <option value="">Todos</option>
                                    <option value="Primera conversación">Primera conversación</option>
                                    <option value="Revisita">Revisita</option>
                                    <option selected value="<?= $_POST['tema'] ?>"><?= $_POST['tema'] ?></option>
                                    <option value="Otro">Otro</option>

                                <?php
                                } else if ($_POST['tema'] == 'Otro') {
                                ?>
                                    <option value="">Todos</option>
                                    <option value="Primera conversación">Primera conversación</option>
                                    <option value="Revisita">Revisita</option>
                                    <option value="Curso bíblico">Curso bíblico</option>
                                    <option selected value="<?= $_POST['tema'] ?>"><?= $_POST['tema'] ?></option>

                                <?php
                                }
                            } else {
                                ?>
                                <option selected value="">Todos</option>
                                <option value="Primera conversación">Primera conversación</option>
                                <option value="Revisita">Revisita</option>
                                <option value="Curso bíblico">Curso bíblico</option>
                                <option value="Otro">Otro</option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-3 text-center">
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
                    <div class="col-1 d-flex align-items-end justify-content-center px-0">
                        <button id="enviar" onclick="vacio();" class="btn btn-outline-dark btn-md fw-bold"><i class="fas fa-search"></i></button>
                        <a href="listaInformesVarones.php" class="ms-3 btn btn-outline-danger btn-md fw-bold"><i class="fa-solid fa-xmark"></i></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    <?php
        if($cantBusquedas==0){
    ?>
        <div class="row">
            <h4 class="text-danger m-5 text-center"><i class="fas fa-exclamation-triangle"></i> No se encontraron coincidencias con la búsqueda <i class="fas fa-exclamation-triangle"></i></h4>
        </div>
    <?php
        } else {
    ?>
    <div class="row mx-auto">
    <h5 class="m-2 p-2">Resultados encontrados: <?=$cantBusquedas?></h5>
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
                    while ($busqueda = mysqli_fetch_assoc($busquedas)) {
                    ?>
                        <tr>
                            <td><?= $busqueda['idinformes_mujeres'] ?></td>
                            <td> <a href="verPerfilMujer.php?idmujeres=<?= $busqueda['idmujeres'] ?>" id="link"><?= $busqueda['nombre'] ?></a> </td>
                            <td><?php
                                $busqueda['fecha'];
                                $cambioFormato = strtotime($busqueda['fecha']);
                                $nuevoFormato = date('d-m-Y', $cambioFormato);
                                echo $nuevoFormato;
                                ?></td>
                            <td>
                                <a href="verInformeMujer.php?idinformes_mujeres= <?= $busqueda['idinformes_mujeres'] ?>" class="btn btn-outline-dark btn-sm fw-bold"><i class="fas fa-eye"></i> Ver</a>
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
                            <td> <a href="verPerfilMujer.php?idmujeres=<?= $alerta['idmujeres'] ?>" id="link"> <?= $alerta['nombre'] ?></a></td>
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
                                    <a href="verPerfilMujer.php?idmujeres=<?= $noAsignado['idmujeres'] ?>" id="link"><?= $noAsignado['nombre'] ?></a>
                                </td>
                            </tr>
                    <?php
                        }
                    }}
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript">
function vacio() {
        if ($('#nombre').val() == '' && $('#fecha').val() == '' && $('#sala').val() == '' && $('#tema').val() == '') {
            $('#form').attr('action', 'listaInformesVarones.php');
            
        } else {
            $('#form').attr('action', '');
            
        }
    }
</script>
<?php
    include '../includes/footer.php';
?>