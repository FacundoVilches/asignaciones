<?php
require '../sesion/config.php';
require '../funciones/autenticacion.php';
autenticar();
require '../funciones/conexion.php';
require '../funciones/varones.php';
$varones = listarVarones();
include '../includes/index.html';
include '../includes/nav.php';
?>

<div class="container" >

    <div class="row p-0">
        <div class="col">
            <h1 class="m-2 p-2">Varones matriculados</h1>
        </div>
        <div class="col my-auto">
            <div class="row d-flex justify-content-end align-items-center m-0">
                <div class="col-6 d-flex justify-content-end text-secondary p-0">
                <input onkeyup="buscador($('#buscar').val());" type="text" id="buscar" class="form-control" placeholder="Insertar nombre o apellido">
                </div>
                <div class="col-1">
                <i class="text-secondary fas fa-search"></i>
                </div>
            </div>
        </div>
        <div class="p-0" id="resultadoBuscador">
            
        </div>
        <table id="total" class="table table-hover table-borderless table-striped text-center">
            <thead>
                <tr>
                    <th>#</th>
                    <th colspan="4">Nombre</th>
                    <th colspan="">
                        <a href="formAgregarVaron.php" class="btn btn-outline-success btn-sm fw-bold"><i class="fas fa-plus"></i> Agregar</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($varon = mysqli_fetch_assoc($varones)) {
                ?>
                    <tr>
                        <td><?= $varon['idvarones'] ?></td>
                        <td colspan="4"> <a href="verPerfilVaron.php?idvarones=<?= $varon['idvarones'] ?>" id="link"><?= $varon['nombre'] ?></a> </td>
                        <td>
                            <a href="formModificarVaron.php?idvarones=<?= $varon['idvarones'] ?>" class="btn btn-outline-primary btn-sm fw-bold"><i class="fas fa-marker"></i> Modificar</a>
                        </td>
                        <td>
                            <a href="formEliminarVaron.php?idvarones=<?= $varon['idvarones'] ?>" class="btn btn-outline-danger btn-sm fw-bold"><i class="fas fa-trash-alt"></i> Eliminar</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <script type="text/javascript">
        function buscador(buscar) {
            if ($('#buscar').val() != "") {
                $('#total').hide();
                $('#resultadoBuscador').show();
            } else {
                $('#total').show();
                $('#resultadoBuscador').hide();
            }
            var parametros = {
                "buscar": buscar
            };
            $.ajax({
                data: parametros,
                type: 'post',
                url: 'buscadorVarones.php',
                success: function(data) {
                    document.getElementById("resultadoBuscador").innerHTML = data;
                }
            })
        }
    </script>
</div>
<?php
    include '../includes/footer.php';
?>