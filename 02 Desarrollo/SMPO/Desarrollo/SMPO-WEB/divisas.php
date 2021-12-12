<?php 
	session_start();
	$usuario = $_SESSION['user'];

	if(isset($_SESSION['user'])){
		$usuario = $_SESSION['user'];
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
<body>
<nav class="navbarzzz">
        <ul>
            <li><a href="Principal.php">SmartMoney</a></li>
            <li><a href="invertir.php">Invertir</a></li>
            <li><a href="grafico.php">Gráficos</a></li>
            <li><a href="usuario.php">Usuario</a></li>
            <li><a href="php/salir.php">Salir</a></li>
        </ul>
    </nav>
	<h1 class="title">Conversor de Divisas</h1>
	<div class="container-fluid">
		<div class="bg-light p-3 border mt-3 rounded">
			<div class="row mb-2">
				<div class="col-md-12 col-lg-5 col-12">
					
					<form id="frmajax" method="POST" id="">
						<div class="form-group col-md-8 ml-3">
							<label for="cantidad">Cantidad</label>
							<input type="number" class="form-control" id="cantidad" name="cantidad" onchange="convertir()" min="1" required>
						</div>
						<div class="dropdown col-md-8 ml-3 mb-2">
							<label for="Convertird">Calcular de:</label>
						<div>
							<select class="btn btn-primary dropdown-toggle ml-1 px-4" data-toggle="dropdown" id="de" onchange="convertir()">
								<option value="1">Soles</option>
								<option value="2">Dolares</option>
								<option value="3">Euros</option>
							</select>
						</div>
				</div>
				<div class="dropdown col-md-8 ml-3 mb-2">
					<label for="Convertira">Calcular a:</label>
						<div>
							<select class="btn btn-primary dropdown-toggle ml-1 px-4" data-toggle="dropdown" id="a" onchange="convertir()">
								<option value="1">Soles</option>
								<option value="2">Dolares</option>
								<option value="3">Euros</option>
							</select>
						</div>
				</div>

					<label class="font-weight-bolder mt-1 mb-3 ml-3 col-md-4 mb-1" id="resultado">Resultado: 0.00</label>
					<label class="font-weight-bolder mb-3 col-md-8 ml-3 mb-1" id="costo"></label>

					<div class="auto" id="auto" style="display:none">
						<input class="ml-3" id="dolar" name="dolar"></input>
						<input class="ml-3" id="euro" name="euro"></input>
						<input class="ml-3" id="descuento" name="descuento"></input>
						<input class="ml-3" name="resultado2" id="resultado2"></input>
						<input class="ml-3" name="usuario" value="<?php echo $usuario; ?>" id="usuario"></input>
					</div>

					<div>
						<button class="btn ml-4 btn-success" id="registrarCompra">Comprar</button>
						<a href="invertir.php" class="btn btn-danger">Cancelar</a>
					</div>
					</form>
			</div>
			<div class="d-none d-lg-block col-md-6 mt-2 col-lg-6">
				<img src="img/divisasok.jpg" class="img-fluid rounded" alt="fondo">
			</div>
		</div>
	</div>
	
</div>
	<script src="funcionesJS/divisas.js"></script>
</body>
</html>

<?php
} else {
	header("location:index.php");
	}
?>

