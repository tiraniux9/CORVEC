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
  <link rel="stylesheet" href="css/main.css">

</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="../NuevoCORVEC/Imagenes/corvec.ico" alt="" width="100"> CORVEC</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Principal</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="MesaEmpresarial.php">Mesa Empresarial</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="DropdownColegios" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Colegios
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">CTP Puriscal</a></li>
              <li><a class="dropdown-item" href="ColegioTecTurrubares.php">CTP Turrubares</a></li>
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

  <div id="ribbon" class="container-fluid">
    <br>
    <br>
    <br>
  </div>
  <div id="separador-ribbon" class="container-fluid">
    <div class="content bg-warning"></div>
  </div>


  <div id="infoCorvec" class="px-5 pb-5  bg-success">
    <div class="container">
      <div class="row">
        <h2 class="text-center text-white text-shadow">Informacion del Corvec</h2>
      </div>
      <div class="row">
        <p class="text-center text-white text-shadow">Aqui va la informacion del Corvec que esta pendiente del proyecto
          final</p>
      </div>
    </div>
  </div>

  <div id="ribbon" class="container-fluid">
    <br>
    <br>
    <br>
  </div>
  <div id="separador-ribbon" class="container-fluid">
    <div class="content bg-warning"></div>
  </div>

  <div id="colegios">
    <div class="container-md-p-5">
      <div class="row pt-5">
        <h3 class="text-center pb-5 pt-5 h1">Colegios Involucrados en este proyecto:</h3>
      </div>
      <div class="row">

        <div class="col-md col-sm-center">
          <div class="card w-75 card-border mb-5">
            <img src="Imagenes/CtpPuriscalEscudo.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">CTP Puriscal</h5>
              <p class="card-text">Ejemplo de texto para tarjeta</p>
              <a href="#" class="btn-primary">Saber Mas</a>
            </div>
          </div>
        </div>

        <div class="col-sm">
          <div class="card w-75 card-border mb-5 text-center">
            <img src="Imagenes/ctpEscudoPalmichal.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">CTP Palmichal</h5>
              <p class="card-text">Ejemplo de texto para tarjeta</p>
              <a href="ColegioTecPalmichal.php" class="btn-primary">Saber Mas</a>
            </div>
          </div>
        </div>

        <div class="col-sm">
          <div class="card w-75 card-border mb-5 text-center">
            <img src="Imagenes/CtpTurrubaresEscudo.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">CTP Turrubares</h5>
              <p class="card-text">Ejemplo de texto para tarjeta</p>
              <a href="ColegioTecTurrubares.php" class="btn-primary">Saber Mas</a>
            </div>
          </div>
        </div>

        <div class="col-sm">
          <div class="card w-75 card-border mb-5 text-center">
            <img src="Imagenes/ctpGloriaEscudo.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">CTP Gloria</h5>
              <p class="card-text">Ejemplo de texto para tarjeta</p>
              <a href="ColegioTecGloria.php" class="btn-primary">Saber Mas</a>
            </div>
          </div>
        </div>

        <div class="col-sm">
          <div class="card w-75 card-border mb-5 text-center">
            <img src="Imagenes/ctpMoraEscudo.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">CTP Mora</h5>
              <p class="card-text">Ejemplo de texto para tarjeta</p>
              <a href="ColegioTecMora.php" class="btn-primary">Saber Mas</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="footer" class="p-5">
    <div class="container w-50 pt-5">
      <div class="row-col-md-2 justify-content-md-center">
        <div class="col text-center">
          <a href="#">
            <button class="btn btn-lg rounded-pill btn-warning w-100 p-3 shadow-sm font-weigth-bolt">Servicios</button>
          </a>
        </div>
      </div>
    </div>

    <div class="row justify-content-md-center py-5">
      <div class="col text-center font-weigth-ligth">
        <p class="text-center text-shadow">Informacion de la empresa general o del proyeto</p>
        <p class="text-center text-shadow">Ya necesaria como redes o cosas informativas no tan relevantes</p>
      </div>
    </div>
  </div>
</body>
</html>