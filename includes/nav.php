<?php
include '../includes/index.html';
?>

<header class="bg-dark mb-3 shadow-sm border-bottom border-light">
    <nav class="site-header sticky-top py-2">
        <div class="container-fluid m-0 p-0">
            <div class="row mx-auto">
                <div class="col-12 p-0 text-center">
                    <ul class="nav py-0 px-5 bg-dark d-flex justify-content-between">
                        <?php
                        if ($_SESSION['nombre'] == 'Flavio Escobar') {
                        ?>
                            <li class="nav-item m-3">
                                <div class="row">
                                    <div class="col">
                                        <a href="admin.php">
                                            <h4><i class=" fas text-warning fa-home"></i></h4>
                                        </a>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <a href="admin.php" class="nav-item text-decoration-none text-warning">INICIO</a>
                                    </div>
                                </div>

                            </li>
                            <li class="nav-item m-3">
                                <div class="row">
                                    <div class="col">
                                        <a href="listaVarones.php">
                                            <h4><i class="fas text-primary fa-male"></i></h4>
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <a href="listaVarones.php" class="nav-item text-primary text-decoration-none">LISTA VARONES</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item m-3">
                                <div class="row">
                                    <div class="col">
                                        <a href="listaInformesVarones.php">
                                            <h4><i class="fas fa-list-ol text-primary"></i></h4>
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <a href="listaInformesVarones.php" class="nav-item text-primary text-decoration-none">INFORMES VARONES</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item m-3">
                                <div class="row">
                                    <div class="col">
                                        <a href="listaMujeres.php">
                                            <h4><i class="fas text-danger fa-female"></i></h4>
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <a href="listaMujeres.php" class="nav-item text-danger text-decoration-none">LISTA MUJERES</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item m-3">
                                <div class="row">
                                    <div class="col">
                                        <a href="listaInformesMujeres.php">
                                            <h4><i class="fas fa-list-ol text-danger"></i></h4>
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <a href="listaInformesMujeres.php" class="nav-item text-danger text-decoration-none">INFORMES MUJERES</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item m-3">
                                <div class="row">
                                    <div class="col">
                                        <a href="ajustes.php">
                                            <h4><i class="fa-solid text-secondary fa-wrench"></i></h4>
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <a href="ajustes.php" class="nav-item text-secondary text-decoration-none">AJUSTES</a>
                                    </div>
                                </div>
                            </li>
                        <?php
                        } else if ($_SESSION['nombre'] == 'C??sar Brochero') {
                        ?>
                            <li class="nav-item m-3">
                                <div class="row">
                                    <div class="col">
                                        <a href="admin.php">
                                            <h4><i class=" fas text-warning fa-home"></i></h4>
                                        </a>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <a href="admin.php" class="nav-item text-decoration-none text-warning">INICIO</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item m-3">
                                <div class="row">
                                    <div class="col">
                                        <a href="listaDiscursantesCongregacion.php">
                                            <h4><i class="fa-solid fa-users"></i></h4>
                                        </a>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <a href="listaDiscursantesCongregacion.php" class="nav-item text-decoration-none text-primary">DISCURSANTES DE <br> LA CONGREGACI??N</a>
                                    </div>
                                </div>

                            </li>
                            <li class="nav-item m-3">
                                <div class="row">
                                    <div class="col">
                                        <a href="informesDiscursantesCongregacion.php">
                                            <h4><i class="fas fa-sign-out"></i></h4>
                                        </a>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <a href="informesDiscursantesCongregacion.php" class="nav-item text-decoration-none text-primary">INFORMES DE <br> DISCURSOS</a>
                                    </div>
                                </div>

                            </li>
                            <li class="nav-item m-3">
                                <div class="row">
                                    <div class="col">
                                        <a href="listaDiscursantesVisitantes.php">
                                            <h4><i class="fa-solid fa-user-tie text-danger"></i></h4>
                                        </a>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <a href="listaDiscursantesVisitantes.php" class="nav-item text-decoration-none text-danger">DISCURSANTES <br> VISITANTES</a>
                                    </div>
                                </div>

                            </li>
                            <li class="nav-item m-3">
                                <div class="row">
                                    <div class="col">
                                        <a href="informesDiscursantesVisitantes.php">
                                            <h4><i class="fas fa-sign-in text-danger"></i></h4>
                                        </a>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <a href="informesDiscursantesVisitantes.php" class="nav-item text-decoration-none text-danger">INFORMES DE <br> DISCURSOS</a>
                                    </div>
                                </div>

                            </li>
                            <li class="nav-item m-3">
                                <div class="row">
                                    <div class="col">
                                        <a href="listaBosquejos.php">
                                            <h4><i class="fa-solid fa-file text-info"></i></h4>
                                        </a>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <a href="listaBosquejos.php" class="nav-item text-decoration-none text-info">BOSQUEJOS</a>
                                    </div>
                                </div>

                            </li>
                            <li class="nav-item m-3">
                                <div class="row">
                                    <div class="col">
                                        <a href="ajustes.php">
                                            <h4><i class="fa-solid fa-wrench text-secondary"></i></h4>
                                        </a>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <a href="ajustes.php" class="nav-item text-decoration-none text-secondary">AJUSTES</a>
                                    </div>
                                </div>

                            </li>
                        <?php
                        }
                        if (isset($_SESSION['login'])) {
                        ?>
                            <li class="nav-item m-3 dropdown">
                                <div class="row">
                                    <div class="col">
                                        <h4><i class="fa-solid text-success fa-user"></i></h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <button class="btn text-success btn-dark dropdown-toggle px-2" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                            <?= $_SESSION['nombre'] ?>
                                        </button>
                                        <div class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuButton">
                                            <a class="text-danger dropdown-item bg-dark py-2" href="logout.php">
                                                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                                Cerrar sesi??n
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                        </div>
                    </div>
                            

        <?php
                        } else {
        ?>
            <!-- <li class="nav-item m-3">
                <div class="row">
                    <div class="col">
                        <a href="index.php">
                            <h4><i class="fa-solid fa-arrow-right-to-bracket text-light"></i></h4>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <a href="index.php" class="nav-item text-light text-decoration-none">INICIAR SESI??N</a>
                    </div>
                </div>
            </li> -->
        <?php
                        }
        ?>
        </ul>
        </div>

        </div>

        </div>
    </nav>
</header>