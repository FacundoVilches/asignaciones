<?php
require '../sesion/config.php';
require '../funciones/autenticacion.php';
autenticar2();
include '../includes/index.html';


?>

<html style="height: 100%;">

<body style="
    background-color:#cbcaca;

    margin:0;
    padding: 0;
    display:flex;
    justify-content:center;
    align-items:center;">

    <div class="container text-center">

        <!-- <h1 class="m-4">INICIO</h1> -->
        <div class="col">
            <h1>¡Bienvenido <?=$_SESSION['nombre'] ?>!</h1>
        </div>

        <div class="col">
            <a href="listaDiscursantesCongregacion.php" class="btn btn-lg btn-outline-primary m-3"><i class="fa-solid fa-users"></i> DISCURSANTES DE LA CONGREGACIÓN</a>
        </div>
        <div class="col">
            <a href="informesDiscursantesCongregacion.php" class="btn btn-lg btn-outline-primary m-3"><i class="fas fa-sign-out"></i> INFORMES DE DISCURSOS</a>
        </div>
        <hr>
        <div class="col">
            <a href="listaDiscursantesVisitantes.php" class="btn btn-lg btn-outline-danger m-3"><i class="fa-solid fa-user-tie"></i> DISCURSANTES VISITANTES</a>
        </div>
        <div class="col">
            <a href="informesDiscursantesVisitantes.php" class="btn btn-lg btn-outline-danger m-3"><i class="fas fa-sign-in"></i> INFORMES DE DISCURSOS</a>
        </div>
        <hr>
        <div class="col">
            <a href="listaBosquejos.php" class="btn btn-outline-success btn-lg m-3"><i class="fa-solid fa-file"></i> BOSQUEJOS</a>
        </div>
        <hr>
        <div class="col">
            <a href="ajustes.php" class="btn btn-outline-secondary btn-lg m-3"><i class="fa-solid me-3 fa-wrench"></i> AJUSTES</a>
        </div>


    </div>
</body>

</html>