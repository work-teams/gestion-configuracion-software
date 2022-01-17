<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<?php require_once "php/scripts.php"; ?>
	<link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/estilosComunes.css">

</head>
<body class="fondoRegistro">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="panel panel-danger mt-4">
					<h1 class="text-dark text-center titulot">SMART MONEY</h1>
					<p class="text-dark encabezado text-center">Registro de usuario</p>
				</div>
			</div>
		</div>

		<div class="panel panel-body">
			<form id="frmRegistro">
				<div class="form-row justify-content-between ">
				
					<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4">
						<label for="">Nombres</label>
						<input type="text" id="nombres" class="form-control" placeholder="Nombres">
					</div>

					<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4">
						<label for="">Primer Apellido</label>
						<input type="text" id="primerApellido" class="form-control" placeholder="Primer Apellido">
					</div>

					<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4">
						<label for="">Segundo Apellido</label>
							<input type="text" id="segundoApellido" class="form-control" placeholder="Segundo Apellido">
					</div>

					<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4">
						<label for="">Numero DNI</label>
						<input type="text" id="dni" class="form-control" placeholder="DNI">
					</div>

					<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4">
						<label for="">Teléfono</label>
						<input type="text" id="telefono" class="form-control" placeholder="Teléfono">
					</div>

					<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4">
						<label for="">Fecha Nacimiento</label>
						<input class="form-control" id="fechaNac" type="date" min="1900-01-01" max="2002-08-29" value="" id="example-date-input" required>
					</div>

					<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4">
						<label for="">Usuario</label>
						<input type="text" id="usuario" class="form-control" placeholder="Usuario">
					</div>

					<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4">
						<label for="">Correo Electrónico</label>
						<input type="email" id="correo" class="form-control" placeholder="Correo electrónico">
					</div>

					<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4">
						<label for="">Contraseña</label>
						<input type="password" id="password" class="form-control" placeholder="Contraseña">
					</div>


				</div>

				<div class="form-row justify-content-around botones my-3">
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-3">
						<a href="index.php" class="btn btn-danger d-block">Volver al inicio</a>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-3">
						<span class="btn btn-success d-block" id="registrarNuevo">Registrarse</span>
					</div>
				</div>

			</form>
		</div>

	</div>
	<script src="funcionesJS/registro.js"></script>
</body>
</html>