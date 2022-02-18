<?php
require 'sesion/config.php';
include 'includes/index.html';
include 'includes/nav.php';

?>

<main class="container m-5">

       <h1 class="m-5">Ingreso a sistema</h1>

       <div class="alert bg-light p-4 col-8 mx-auto shadow">
              <div>
                     <form action="login.php" method="post" class="mb-2">

                            <label for="username">Nombre de usuario</label>
                            <input type="text" name="username" class='form-control' id="username" required>
                            <br>
                            <label for="clave">Contraseña</label>
                            <input type="password" name="clave" class='form-control' id="clave" required>
                            <br>
                            <button class="btn btn-outline-success m-3 btn-md fw-bold"><i class="fa-solid fa-arrow-right-to-bracket"></i> Ingresar
                            </button>
                     </form>
              </div>
              <?php
              if (isset($_GET['error']) && $_GET['error'] == 1) {
              ?>
                     <div class="alert alert-danger col-12 mx-auto">
                            Nombre y/o contraseña incorrectas
                     </div>
              <?php
              } else if (isset($_GET['error']) && $_GET['error'] == 2) {
              ?>
                     <div class="alert alert-danger col-12 mx-auto">
                            Debe iniciar sesión
                     </div>
              <?php
              }
              ?>
</main>