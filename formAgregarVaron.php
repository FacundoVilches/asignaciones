<?php

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
                            <label for="nombre">Nombre (*)</label>
                            <input type="text" name="nombre" class="form-control" required>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-6 m-3">
                            <label for="contacto">Contacto</label>
                            <input type="text" name="contacto" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row mx-auto d-flex justify-content-between">
                    <div class="col text-center">
                        <button class="btn btn-outline-success m-3"><i class="fas fa-check"></i> Agregar</button>
                    </div>
                    <div class="col text-center">
                        <a href="listaVarones.php" class="btn btn-outline-secondary m-3"><i class="fas fa-arrow-left"></i> Volver</a>
                    </div>
                </div>

            </form>

        </div>
    </div>
</main>