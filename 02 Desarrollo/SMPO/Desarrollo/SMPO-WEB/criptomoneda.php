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
<body class="fondo" onload="cargar()" >
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
        <div>
          <h2 class="text-center rounded text-light mt-3 py-2 bg-success">COMPRA Y VENTA DE CRIPTOMONEDAS</h2>
        </div>

      <div class="row text-center">
        <div class="col-lg-2 col-md-4 col-sm-6 py-2 px-1">
          <div class="card">
          <h3 class="card-title-text">BITCOIN</h3>
          <img class="card-img-top" src="img/bitcoin2.jpg" alt="bitcoin" style="width:100%">
          <div class="row">
            <div class="card-body">
              <div class="">
                <button type="input" class="btn btn-success btn-block my-1">
                  <div aclass="trade-button-title" >COMPRAR: <span id ="ComprarBitcoin">0</span></div>
                </button>
              </div>
              <div class="">
                <button button type="input" class="btn btn-primary btn-block my-1">
                  <div aclass="trade-button-title">VENDER: <span id ="VenderBitcoin">0</span></div>
                </button>
              </div>
            </div>
          </div>
        </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 py-2 px-1">
          <div class="card">
          <h3 class="card-title-text">ETHERUM</h3>
          <img class="card-img-top" src="img/etherum.jpg" alt="etherum" style="width:100%">
          <div class="row">
            <div class="card-body">
              <button type="input" class="btn btn-success btn-block my-1">
              <div aclass="trade-button-title" >COMPRAR: <span id ="ComprarEtherum">0</span></div>
            </button>
            <button type="input" class="btn btn-primary btn-block my-1">
              <div aclass="trade-button-title">VENDER: <span id ="VenderEtherum">0</span></div>
            </button>
          </div>
          </div>
        </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 py-2 px-1">
          <div class="card">
          <h2 class="card-title-text">RIPPLE</h2>
          <img class="card-img-top" src="img/ripple.jpg" alt="ripple" style="width:100%">
          <div class="row">
          <div class="card-body">
            <button type="input" class="btn btn-success btn-block my-1">
              <div aclass="trade-button-title">COMPRAR: <span id ="ComprarRipple">0</span></div>
            </button>
            <button type="input" class="btn btn-primary btn-block my-1">
              <div aclass="trade-button-title" >VENDER: <span id ="VenderRipple">0</span></div>
            </button>
          </div>
          </div>
        </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 py-2 px-1">
          <div class="card">
          <h2 class="card-title-text">DASH</h2>
          <img class="card-img-top" src="img/dash.jpg" alt="dash" style="width:100%">
          <div class="row">
            <div class="card-body">
            <button type="input" class="btn btn-success btn-block my-1">
              <div aclass="trade-button-title" >COMPRAR: <span id ="ComprarDash">0</span></div>
            </button>
            <button type="input" class="btn btn-primary btn-block my-1">
              <div aclass="trade-button-title" >VENDER: <span id ="VenderDash">0</span></div>
            </button>
          </div>
          </div>
        </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 py-2 px-1">
          <div class="card">
          <h2 class="card-title-text">LITECOIN</h2>
          <img class="card-img-top" src="img/litecoin.jpg" alt="litecoin" style="width:100%">
          <div class="row">
            <div class="card-body">
            <button type="input" class="btn btn-success btn-block my-1">
              <div aclass="trade-button-title" >COMPRAR: <span id ="ComprarLitecoin">0</span></div>
            </button>
            <button type="input" class="btn btn-primary btn-block my-1">
              <div aclass="trade-button-title" >VENDER: <span id ="VenderLitecoin">0</span></div>
            </button>
          </div>
          </div>
        </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 py-2 px-1">
          <div class="card">
          <h2 class="card-title-text">TRON</h2>
          <img class="card-img-top" src="img/tron.jpg" alt="tron" style="width:100%">
          <div class="row">
            <div class="card-body">
            <button type="input" class="btn btn-success btn-block my-1">
              <div aclass="trade-button-title" >COMPRAR: <span id ="ComprarTron">0</span></div>
            </button>
            <button type="input" class="btn btn-primary btn-block my-1">
              <div aclass="trade-button-title" >VENDER: <span id ="VenderTron">0</span></div>
            </button>
          </div>
          </div>
        </div>
        </div>
      </div> 
  </div>
  <script src="funcionesJS/criptomoneda.js"></script>
</body>
</html>

<?php
} else {
	header("location:index.php");
	}
?>