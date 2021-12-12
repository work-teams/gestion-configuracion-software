<?php 
	session_start();

	if(isset($_SESSION['user'])){
?>
<!DOCTYPE html>
<html>
<head>
	<title>Smart Money</title>
	<?php require_once "php/scripts.php";?>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/estilosComunes.css">

</head>
<body class="fondo">
<nav class="navbar pb-1 pt-1 navbar-expand-lg navbar-dark bg-dark mb-2 text-center">
    <a href="Principal.php" class="navbar-brand text-white text-center mr-3 px-3">SmartMoney</a>
    <button class= "navbar-toggler" data-target="#menu" data-toggle="collapse" type="button">
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
    <div class="container-fluid">

      <div class="row">
        <h3 class="col-4"></h3>
        <h3 class="text-center col-md-4 rounded text-light mx-3 py-0 invertir bg-success mb-0">Invertir</h3>
        <h3 class="col-4"></h3>
      </div>

      <div class="row">
          <div class="col-2"></div>
          <div class="col-8">
            <div class="row">
                <div class="col-md-6 col-12 con">
                    <img src="img/bitcoin.jpg" class="rounded img-fluid imgv" alt="" style="border: 1px solid black">
                    <a class="btn botonEnlace" href="criptomoneda.php">CRIPTOMONEDA</a>
                </div>
                <div class="col-md-6 col-12 con">
                    <img src="img/cambio.jpg" class="rounded img-fluid imgv" alt="" style="border: 1px solid black">
                    <a class="btn botonEnlace" href="divisas.php">DIVISAS</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-12 con">
                    <img src="img/beneficio.jpg" class="rounded img-fluid imgv" alt="" style="border: 1px solid black">
                    <a class="btn botonEnlace" href="#">BONOS</a>
                </div>
                <div class="col-md-6 col-12 con">
                    <img src="img/visualiza.jpg" class="rounded img-fluid imgv" alt="" style="border: 1px solid black">
                    <a class="btn botonEnlace2" href="#">ACCIONES</a>
                </div>
            </div>
          </div>
          <div class="col-2"></div>
      </div>
  </div>
  
</body>
</html>

<?php
} else {
	header("location:index.php");
	}
?>