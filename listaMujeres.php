<?php
include 'includes/index.html';
include 'includes/nav.html';
require 'funciones/conexion.php';
require 'funciones/mujeres.php';
$mujeres = listarMujeres();
?>

<div class="container">

    <div class="row p-0">
        <div class="col">
            <h1 class="m-2 p-2">Mujeres matriculadas</h1>
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
        <div class="p-0" id="resultadoBuscador"></div>
        <table id="total" class="table table-hover table-borderless table-striped text-center">
            <thead>
                <tr>
                    <th>#</th>
                    <th colspan="4">Nombre</th>
                    <th colspan="">
                        <a href="formAgregarMujer.php" class="btn btn-outline-success btn-sm fw-bold"><i class="fas fa-plus"></i> Agregar</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($mujer = mysqli_fetch_assoc($mujeres)) {
                ?>
                    <tr>
                        <td><?= $mujer['idmujeres'] ?></td>
                        <td colspan="4"> <a href="verPerfilMujer.php?idmujeres=<?= $mujer['idmujeres'] ?>" id="link"><?= $mujer['nombre'] ?></a> </td>
                        <td>
                            <a href="formModificarMujer.php?idmujeres=<?= $mujer['idmujeres'] ?>" class="btn btn-outline-primary btn-sm fw-bold"><i class="fas fa-marker"></i> Modificar</a>
                        </td>
                        <td>
                            <a href="formEliminarMujer.php?idmujeres=<?= $mujer['idmujeres'] ?>" class="btn btn-outline-danger btn-sm fw-bold"><i class="fas fa-trash-alt"></i> Eliminar</a>
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
                url: 'buscadorMujeres.php',
                success: function(data) {
                    document.getElementById("resultadoBuscador").innerHTML = data;
                }
            })
        }
    </script>
    </body>

    </html>