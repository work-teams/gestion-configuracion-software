<?php
session_start();

if (isset($_SESSION['user'])) {
?>
  <!DOCTYPE html>
  <html lang="es">
  <html>

  <head>
    <title>Smart Money</title>
    <?php require_once "php/scripts.php"; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilosComunes.css">

  </head>

  <body class="fondo">
    <nav class="navbar pb-1 pt-1 navbar-expand-lg navbar-dark bg-dark mb-2 text-center">
      <a href="Principal.php" class="navbar-brand text-white text-center mr-3 px-3">SmartMoney</a>
      <button class="navbar-toggler" data-target="#menu" data-toggle="collapse" type="button">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="menu">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active mx-5 px-3">
            <a href="invertir.php" class="nav-link" style="font-size:18px;">Invertir</a>
          </li>
          <li class="nav-item active mx-5 px-3">
            <a href="grafico.php" class="nav-link " style="font-size:18px;">Gráficos</a>
          </li>
          <li class="nav-item active" style="">
            <a href="usuario.php" class="nav-link mx-5 px-3" style="font-size:18px;">Usuario</a>
          </li>
        </ul>
        <div class="text-center">
          <li class="navbar-text">
            <a href="php/salir.php" style="font-size:18px;" class="nav-link">Cerrar sesión</a>
          </li>
        </div>
      </div>
    </nav>
    <div id="actualiza">
    </div>
    <div class="container-fluid">
      <div class="row py-4">
        <div class="col-12 col-sm-12 col-md-12 col-xl-12 col-lg-12">
          <h1 class="text-light text-center titulop">Smart Money</h1>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-xl-12 col-lg-12">
          <img src="img/fisi.png" class="img-fluid dir" alt="">
        </div>
      </div>
    </div>
  </body>
  <script src="funcionesJS/principal.js"></script>

  </html>

<?php
} else {
  header("location:index.php");
}
?>