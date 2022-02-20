<?php
require '../sesion/config.php';
require '../funciones/autenticacion.php';
autenticar();
include '../includes/index.html';


?>

<html style="height: 100%;">

<body style="
    background-color:#cbcaca;
    height:100%;
    margin:0;
    padding: 0;
    display:flex;
    justify-content:center;
    align-items:center;">

    <div class="container text-center">

        <!-- <h1 class="m-4">INICIO</h1> -->

        <div class="col">
            <a href="listaDiscursantes.php" class="btn btn-lg btn-outline-primary m-4"><i class="fa-solid fa-users"></i> LISTA DE DISCURSANTES</a>
        </div>
        <hr>
        <div class="col">
            <a href="listaInformesDiscursos.php" class="btn btn-lg btn-outline-primary m-4"><i class="fa-solid fa-list-ol"></i> INFORMES DE DISCURSOS</a>
        </div>
        <div class="col">
            <a href="listaBosquejos.php" class="btn btn-outline-primary btn-lg m-4"><i class="fa-solid fa-file"></i> BOSQUEJOS</a>
        </div>
        <hr>
        <div class="col">
            <a href="ajustes.php" class="btn btn-outline-secondary btn-lg m-4"><i class="fa-solid me-3 fa-wrench"></i>AJUSTES</a>
        </div>


    </div>
</body>

</html>