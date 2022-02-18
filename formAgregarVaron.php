<?php
require 'sesion/config.php';
require 'funciones/autenticacion.php';
autenticar();
include 'includes/index.html';

?>

<main class="container m-5">

    <h1 class="m-5">Alta de varón matriculado</h1>
    <div class="row justify-content-center">

        <div class="alert shadow col-8">

            <form action="agregarVaron.php" method="post">
                <div class="form-group">
                    <div class="row d-flex justify-content-center">
                        <div class="col-6 m-3">
                            <label class="m-2" id="negrita" for="nombre">Nombre (*)</label>
                            <input type="text" name="nombre" id="validacionNombre" class="form-control" required>
                            <span id="respuesta"></span>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-6 m-3">
                            <label class="m-2" id="negrita" for="contacto">Contacto</label>
                            <input type="text" name="contacto" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row m-3 mx-auto d-flex justify-content-between">
                    <div class="col text-center">
                        <button id="btn" class="btn btn-outline-success m-3 btn-md fw-bold"><i class="fas fa-check"></i> Agregar</button>
                    </div>
                    <div class="col text-center">
                        <a href="listaVarones.php" class="btn btn-outline-secondary m-3 btn-md fw-bold"><i class="fas fa-arrow-left"></i> Volver</a>
                    </div>
                </div>

            </form>

        </div>
    </div>
</main>
<script>
$("#validacionNombre").keyup(function () {
    var nombre = $(this).val();
    $.ajax({
      url: "verificarNombreVaron.php",
      method: "POST",
      data: {
        nombreVaron: nombre,
      },
      datatype: "text",
      success: function (datos) {
        $("#respuesta").html(datos);
        if ($("#respuesta").children().length != 0) {
          $("#btn").attr("disabled", true);
        } else {
          $("#btn").attr("disabled", false);
        }
      },
    });
  });
</script>