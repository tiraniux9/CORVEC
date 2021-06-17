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
                            <li><a class="dropdown-item active" href="ColegioTecTurrubares.php">CTP Turrubares</a></li>
                            <li><a class="dropdown-item" href="ColegioTecGloria.php">CTP La Gloria</a></li>
                            <li><a class="dropdown-item" href="ColegioTecPalmichal.php">CTP Palmichal</a></li>
                            <li><a class="dropdown-item" href="ColegioTecMora.php">CTP Mora</a></li>
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
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7"
                aria-label="Slide 8"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="8"
                aria-label="Slide 9"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="9"
                aria-label="Slide 10"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="Imagenes/ctpTurrubares1.png" class="d-block w-100" alt="..." height="800">
            </div>
            <div class="carousel-item">
                <img src="Imagenes/ctpTurrubares2.jpg" class="d-block w-100" alt="..." height="800">
            </div>
            <div class="carousel-item">
                <img src="Imagenes/ctpTurrubares3.png" class="d-block w-100" alt="..." height="800">
            </div>
            <div class="carousel-item">
                <img src="Imagenes/ctpTurrubares4.png" class="d-block w-100" alt="..." height="820">
            </div>
            <div class="carousel-item">
                <img src="Imagenes/ctpTurrubares5.png" class="d-block w-100" alt="..." height="820">
            </div>
            <div class="carousel-item">
                <img src="Imagenes/ctpTurrubares6.png" class="d-block w-100" alt="..." height="800">
            </div>
            <div class="carousel-item">
                <img src="Imagenes/ctpTurrubares7.png" class="d-block w-100" alt="..." height="800">
            </div>
            <div class="carousel-item">
                <img src="Imagenes/ctpTurrubares8.png" class="d-block w-100" alt="..." height="800">
            </div>
            <div class="carousel-item">
                <img src="Imagenes/ctpTurrubares9.jpg" class="d-block w-100" alt="..." height="800">
            </div>
            <div class="carousel-item">
                <img src="Imagenes/ctpTurrubares10.jpg" class="d-block w-100" alt="..." height="800">
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
            <div class="col-sm-12 text-center">
                <div class="card-header lead text-white">
                    <img src="Imagenes/CtpTurrubaresEscudo.png" alt="" width="400px" height="400px">
                </div>
            </div>
            <br>
            <div class="col-sm-8">
                <div class="card-header lead bg-success text-white">
                    Reseña Historica
                </div>
                <div class="text-center">
                    Aprovechando el Plan Nacional de creación de Colegios Técnicos Profesionales Agropecuarios en el
                    país del Gobierno del
                    Presidente don José María Figueres Ferrer y siendo Ministro de Educación Pública el Sr. Uladislado
                    Gómez, en el año 1973,
                    surge la inquietud en la comunidad y desde la escuela se organiza el Comité Pro Colegio, con el
                    apoyo del
                    Sr. Rafael Solórzano S., quien era el Diputado de la zona en ese momento.
                    Se le plantea la solicitud al Ministerio de Educación Pública y éste indica los requisitos a
                    cumplir: a. Prematricula,
                    b. Aulas, c. Finca.
                    El Comité con la ayuda entusiasta y decisiva de directores de escuelas y dirigentes comunales,
                    emprenden la
                    campaña de visitas y reuniones a Escobal y Quebrada de Atenas; Grifo Alto, el Poró y el Cacao de
                    Puriscal ; San Rafael,
                    Quebrada Azul, San Luis, San Francisco, Paso Agres, Purires, Monterrey y en San Pablo, a pie, a
                    caballo y en el vehículo
                    de Don Fernando Vargas luna, hasta completar y presentar un listado de 126 posibles alumnos,
                    comprometiéndonos incluso,
                    a albergar en algunas de nuestras casas (gratuitamente) a unos estudiantes de lugares sin
                    transporte.
                    Se habilito aulas y mobiliario cedidas por la Junta de Educación de la Escuela de San Pablo, bajo la
                    dirección del señor,
                    también el templo católico fue prestado y acondicionado por el Presbítero Rodrigo Rojas V. y sus
                    colaboradores. Esta acción
                    trajo que en la comunidad al Comité Pro Colegio se les llamara de profanos. Así mismo, la Escuela de
                    San Pablo, proporcionó
                    algún material didáctico: pizarra, tiza y otros.
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="row">
                    <div class="col-sm">
                        <div class="card-header lead bg-success text-white">
                            Misión
                        </div>
                        <div>
                            El Colegio Técnico Profesional de Turrubares es una institución de Educación Técnica, que
                            desarrolla
                            los más altos valores humanísticos: cívicos, morales, espirituales, ambientalistas y de amor
                            por el
                            trabajo;
                            que forma individuos de un alto nivel técnico y tecnológico para que sean competitivos de
                            acuerdo a
                            las necesidades
                            que les demanda el medio.

                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="card-header lead bg-success text-white">
                            Visión
                        </div>
                        <div>
                            El Colegio Técnico Profesional de Turrubares será un centro Educativo de formación técnica
                            competitiva a nivel de
                            secundaria, brindará educación de calidad y de compromiso con la solución de las necesidades
                            tanto
                            del estudiante,
                            como de la comunidad. Promoverá la formación de valores y aptitudes e impartirá
                            conocimientos
                            básicos para formar
                            ciudadanos participativos, críticos, comprometidos con el bien social y con el medio
                            ambiente.
                        </div>
                    </div>

                </div>
            </div>

            <br>
            <br>
            <br>

            <div class=" row">
                <div class="col-sm-4">
                    <div class="card-header lead bg-success text-white">
                        Talleres
                    </div>
                    <div >
                        - Tecnología de información y comunicación. <br>
                        - Ideando mi pequeño negocio <br>
                        - Explotación avícola. <br>
                        - Preparemos alimentos agrícolas. <br>
                        - Agricultura sostenible. <br>
                        - Industrialicemos frutas y vegetales <br>
                    </div>
                </div>
                <div class="col-sm-4 ">
                    <br>
                    <br>
                    - Mantenimiento preventivo de computadoras <br>
                    - Dinero y finanzas personales <br>
                    - Prepararemos derivados de harina. <br>
                    - Ciber robótica. <br>
                    - Guía naturalista <br>
                </div>
            </div>

            <div class=" row">
                <div class="col-sm-8">
                    <div class="card-header lead bg-success text-white">
                        Especialidades
                    </div>
                    <div >
                        - Agropecuaria en producción Pecuaria <br>
                        - Contabilidad <br>
                        - Agroecología <br>
                        - Turismo en Alimentos y Bebidas <br>
                        - Informática Empresarial <br>
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
                            - Respeto <br>
                            - Responsabilidad <br>
                            - Bondad <br>
                            -Humildad <br>
                        </p>
                    </div>

                    <hr class="w-100 clearfix d-md-none" />


                    <hr class="w-100 clearfix d-md-none" />


                    <hr class="w-100 clearfix d-md-none" />


                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Contactenos</h6>
                        <p><i class="fas fa-home mr-3"></i>San José, Turrubares, San Pablo, 200 mts oeste Plantel Mopt
                            Turrubares</p>
                        <p><i class="fas fa-envelope mr-3"></i> ctp.deturrubares@mep.go.cr</p>
                        <p><i class="fas fa-phone mr-3"></i>+506 4000-02-56</p>
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