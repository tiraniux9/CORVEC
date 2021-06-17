<?php 

  session_start();


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corvec</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/CTP-Mora.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="../NuevoCORVEC/Imagenes/corvec.ico" alt="" width="100">
                CORVEC</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Principal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="MesaEmpresarial.php">Mesa Empresarial</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="DropdownColegios" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Colegios
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">CTP Puriscal</a></li>
                            <li><a class="dropdown-item" href="ColegioTecTurrubares.php">CTP Turrubares</a></li>
                            <li><a class="dropdown-item" href="ColegioTecGloria.php">CTP La Gloria</a></li>
                            <li><a class="dropdown-item" href="ColegioTecPalmichal.php">CTP Palmichal</a></li>
                            <li><a class="dropdown-item active" href="ColegioTecMora.php">CTP Mora</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Login.php">Iniciar Sesion</a>
                      </li>
                      <li class="nav-item">
                <a class="nav-link" href="php/CerrarSesion.php">Cerrar Sesion</a>
                </li>
                </ul>
            </div>
        </div>
    </nav>


    <div id="carouselExampleIndicators" class="carousel slide center" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"
                aria-label="Slide 6"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6"
                aria-label="Slide 7"></button>

        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="Imagenes/ctpMora1.jpg" class="d-block w-100" alt="..." height="800px">
            </div>
            <div class="carousel-item">
                <img src="Imagenes/ctpMora2.jpg" class="d-block w-100" alt="..." width="800px" height="800px">
            </div>
            <div class="carousel-item">
                <img src="Imagenes/ctpMora3.jpg" class="d-block w-100" alt="..." width="800px" height="800px">
            </div>
            <div class="carousel-item">
                <img src="Imagenes/ctpMora4.jpg" class="d-block w-100" alt="..." width="800px" height="800px">
            </div>
            <div class="carousel-item">
                <img src="Imagenes/ctpMora5.jpg" class="d-block w-100" alt="..." width="800px" height="800px">
            </div>
            <div class="carousel-item">
                <img src="Imagenes/ctpMora6.jpg" class="d-block w-100" alt="..." width="800px" height="800px">
            </div>
            <div class="carousel-item">
                <img src="Imagenes/ctpMora7.jpg" class="d-block w-100" alt="..." width="800px" height="800px">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <div id="ribbon" class="container-fluid">
        <br>
        <br>
        <br>
    </div>
    <div id="separador-ribbon" class="container-fluid">
        <div class="content bg-primary"></div>
    </div>

    <div id="InformacionColegio">
        <div class="container-md-p-5">
            <div class=" row">
                <div class="col-sm-12">
                    <div class="card-header lead text-white bg-success text-center">
                        Colegio Tecnico Profesional De Mora
                    </div>
                </div>
            </div>

            <div class=" row">
                <div class="col-sm-12 text-center">
                    <div class="card-header lead text-white">
                        <img src="Imagenes/ctpMoraEscudo.jpg" alt="" width="400px" height="400px">
                    </div>
                </div>
                <br>
                <br>
                <br>
                <div class="row">
                    <div class="col-sm">
                        <div class="card-header lead bg-success text-white">
                            Misión
                        </div>
                        <div>
                            El Colegio Técnico Profesional de Mora es una institución de formación educativa de
                            excelencia y calidad
                            académica-técnica basada en el profesionalismo y compromiso continuo de cada funcionario por
                            brindar una educación
                            de calidad. El CTP de Mora se basa en una convivencia sana de respeto, escucha y diálogo en
                            el ámbito laboral,
                            estudiantil, de padres (y/o encargados legales) y con la comunidad.

                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="card-header lead bg-success text-white">
                            Visión
                        </div>
                        <div>
                            El Colegio Técnico Profesional de Mora formará estudiantes responsables a nivel académico y
                            humano capaces de respetar
                            las diferencias individuales. Son valores para la Visión: la competitividad, el liderazgo y
                            la excelencia profesional.
                        </div>
                    </div>

                </div>
            </div>

            <br>
            <br>
            <br>

            <div class=" row">
                <div class="col-sm-8">
                    <div class="card-header lead bg-success text-white">
                        Especialidades
                    </div>
                    <div>
                        - Ejecutivo para centros de servicios<br>

                        - Informática Empresarial<br>


                        - Administración, Logística y Distribución<br>

                        - Electrónica Industrial<br>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <br>
    <br>
    <footer class="text-center text-lg-start text-white" style="background-color: #929fba">

        <div class="container p-4 pb-0">

            <section class="">

                <div class="row">

                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">
                            Valores institucionales
                        </h6>
                        <p>
                            - Ayuda mutua <br>
                            - Perseverancia <br>
                            - Compromiso <br>
                            - Respeto <br>
                            - Liderazgo <br>
                            - Excelencia Profesional<br>

                        </p>
                    </div>

                    <hr class="w-100 clearfix d-md-none" />


                    <hr class="w-100 clearfix d-md-none" />


                    <hr class="w-100 clearfix d-md-none" />


                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Contactenos</h6>
                        <p><i class="fas fa-home mr-3"></i>San José, Mora, Ciudad Colón, Barrio San Bosco diagonal 
                            a la Escuela San Bosco. </p>
                        <p><i class="fas fa-envelope mr-3"></i>ctp.demora@mep.go.cr</p>
                        <p><i class="fas fa-phone mr-3"></i>+506 2249-0215</p>
                    </div>
                </div>

            </section>

        </div>

        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2021 Copyright:
            <a class="text-white">Esteban Quesasa Retana</a>
        </div>

    </footer>

</body>

</html>