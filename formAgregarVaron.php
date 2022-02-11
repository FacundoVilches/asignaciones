<?php

include 'includes/index.html';

?>

<main class="container">

    <h1>Agregar nuevo varón matriculado</h1>

    <div class="alert">

        <form action="agregarVaron.php" method="post">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" required>
                <br>
                <label for="contacto">Contacto</label>
                <input type="text" name="contacto" class="form-control">
            </div>
            <button class="btn btn-dark m-3">Agregar</button>
            <a href="listaVarones.php" class="btn btn-outline m-3">Volver</a>
        </form>

    </div>

</main>