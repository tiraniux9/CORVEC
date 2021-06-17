<?php 

  session_start();
  //if(!isset($_SESSION['Usuario'])){
  //  echo '
  //    <script>
  //      alert("Por favor debes iniciar Sesión");
  //      window.location = "Login.php";
  //    </script>
  //  
  //  ';

  //  session_destroy();
  //  die();

 // }

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

    <style>
        @media(min-width: 992px){
            .alto-100{
                height: 100vh;
            }
        }
    </style>

</head>
<body id="MesaEmpresarial">

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
                <a class="nav-link" aria-current="page" href="index.php">Principal</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="MesaEmpresarial.php">Mesa Empresarial</a>
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

    <main class="container d-flex align-items-center justify-content-center alto-100">
        <div class="row">
            <!-- Columna izquierda -->
            <div class="col-12 col-lg-9">
                <div class="row">
                    <div class="col-12 col-lg-8 p-2">
                        <article class="card h-100 bg-success">
                            <div class="card-body">
                                <div class="d-flex mb-3">
                                    <img src="Imagenes/Personitas.jpg" alt="50px" width="50px" class="border border-secundary border-3 rounded-circle">
                                    <div class="ps-3">
                                        <h6 class="m-0 h6">Esteban Quesada Retana</h6>
                                        <p class="m-0 h6">Lorem, ipsum</p>
                                    </div>
                                </div>
                                <div>
                                    <p class="h6">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat similique officia iste,
                                         mollitia deserunt asperiores omnis quae nobis ut vero voluptates quam, nihil rerum, doloribus 
                                         officiis sint aperiam! Facere, assumenda?</p>
                                    <p class="fs-h6 lh-1">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos, libero! Magni sapiente quaerat, 
                                        dolor distinctio illo ratione numquam ex modi atque, quam nobis illum facilis. Molestiae autem 
                                        in mollitia facilis!</p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-12 col-lg-4 p-2">
                        <article class="card h-100 bg-primary">
                            <div class="card-body">
                                <div class="d-flex mb-3">
                                    <img src="Imagenes/Colocha.jpg" alt="100px" width="100px" class="border border-secundary border-3 rounded-circle">
                                    <div class="ps-3">
                                        <h6 class="m-0 h6">Esteban Quesada Retana</h6>
                                        <p class="m-0 h6">Lorem, ipsum</p>
                                    </div>
                                </div>
                                <div>
                                    <p class="fs-h6 lh-1">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos, libero! Magni sapiente quaerat, 
                                        dolor distinctio illo ratione numquam ex modi atque, quam nobis illum facilis. Molestiae autem 
                                        in mollitia facilis!</p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-12 col-lg-4 p-2">
                        <article class="card h-100 bg-warning">
                            <div class="card-body">
                                <div class="d-flex mb-3">
                                    <img src="Imagenes/afro.jpg" alt="100px" width="100px" class="border border-secundary border-3 rounded-circle">
                                    <div class="ps-3">
                                        <h6 class="m-0 h6">Esteban Quesada Retana</h6>
                                        <p class="m-0 h6">Lorem, ipsum</p>
                                    </div>
                                </div>
                                <div>
                                    <p class="fs-h6 lh-1">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos, libero! Magni sapiente quaerat, 
                                        dolor distinctio illo ratione numquam ex modi atque, quam nobis illum facilis. Molestiae autem 
                                        in mollitia facilis!</p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-12 col-lg-8 p-2">
                        <article class="card h-100 bg-danger">
                            <div class="card-body">
                                <div class="d-flex mb-3">
                                    <img src="Imagenes/Bebe.jpg" alt="50px" width="50px" class="border border-secundary border-3 rounded-circle">
                                    <div class="ps-3">
                                        <h6 class="m-0 h6">Esteban Quesada Retana</h6>
                                        <p class="m-0 h6">Lorem, ipsum</p>
                                    </div>
                                </div>
                                <div>
                                    <p class="h6">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat similique officia iste,
                                         mollitia deserunt asperiores omnis quae nobis ut vero voluptates quam, nihil rerum, doloribus 
                                         officiis sint aperiam! Facere, assumenda?</p>
                                    <p class="fs-h6 lh-1">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos, libero! Magni sapiente quaerat, 
                                        dolor distinctio illo ratione numquam ex modi atque, quam nobis illum facilis. Molestiae autem 
                                        in mollitia facilis!</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
            <!-- Columna Derecha -->
            <div class="col-12 col-lg-3 p-2">
                <article class="card h-100 bg-secondary">
                    <div class="card-body">
                        <div class="d-flex mb-3">
                            <img src="Imagenes/selfi.jpg" alt="100px" width="100px" class="border border-secundary border-3 rounded-circle">
                            <div class="ps-3">
                                <h6 class="m-0 h6">Esteban Quesada Retana</h6>
                                <p class="m-0 h6">Lorem, ipsum</p>
                            </div>
                        </div>
                        <div>
                            <p class="h6">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat similique officia iste,
                                 mollitia deserunt asperiores omnis quae nobis ut vero voluptates quam, nihil rerum, doloribus 
                                 officiis sint aperiam! Facere, assumenda?</p>
                            <p class="fs-h6 lh-1">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos, libero! Magni sapiente quaerat, 
                                dolor distinctio illo ratione numquam ex modi atque, quam nobis illum facilis. Molestiae autem 
                                in mollitia facilis!</p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </main>

</body>

</html>