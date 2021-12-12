<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Smart Money</title>

	<?php require_once "php/scripts.php"; ?>
	<link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/index.css">
</head>

<body class="fondoindex">

	<div class="container">
		<div class="row mt-4 justify-content-center">
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
				<p class="text-light text-center titulot p-4">SMART MONEY</p>
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-md-offset-4">
				<div class="panel-heading">
					<h3 class="panel-title encabezado text-light text-center m-3">Iniciar sesión</h3>
				</div>
				<div class="row justify-content-center">
					<div class="col-8 panel panel-default">
						<div class="panel-body">
							<form accept-charset="UTF-8" role="form" action="" method="" name="">
								<fieldset>
									<div class="form-group pl-2 pr-2">
										<input class="form-control" placeholder="Usuario" id="usuario" type="text" required>
									</div>

									<div class="input-group pr-2 pl-2">
										<input id="password" placeholder="Contraseña" type="password" class="form-control" required>
										<div class="input-group-append">
											<button id="show_password" class="btn btn-primary" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
										</div>
									</div>

									<div class="form-group mt-3 pl-2 pr-2">
										<span class="btn btn-success d-block btn-lg" id="entrarSistema">Entrar</span>
									</div>
									<h5 class="text-light text-center m-2" id="olvPass">¿No tienes cuenta aún? <a href='registro.php'>Regístrate</a></h5>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="funcionesJS/index.js"></script>
</body>

</html>