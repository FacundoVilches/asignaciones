<?php

require '../sesion/config.php';
require '../funciones/autenticacion.php';
logout();
include '../includes/index.html';
include '../includes/nav.php';

?>

<main class="container">
    <h1>Salió del sistema</h1>

    <div class="alert alert-info">
        Hasta la próxima!
    </div>
</main>