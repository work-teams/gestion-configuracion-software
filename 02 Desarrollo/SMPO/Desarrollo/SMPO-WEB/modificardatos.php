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
    <!--Menu de navegacion-->
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


<?php 
    require_once "php/conexion.php";
    $usuarioSesion = $_SESSION['user'];
    $conexion=conexion();
    
    $sql="SELECT * from usuarios where usuario='$usuarioSesion'";
    $result=mysqli_query($conexion,$sql);
        if(mysqli_num_rows($result) == 1 ){
            $row = mysqli_fetch_array($result);
            $nombres = $row['nombres'];
            $primerApellido = $row['primerApellido'];
            $segundoApellido = $row['segundoApellido'];
            $dni = $row['dni'];
            $telefono = $row['telefono'];
            $password = $row['password'];
            $correo = $row['correo'];

        }
?>
    <!--Formulario de datos-->
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12 col-lg-12 col-xl-7">
                <div class="panel panel-body bg-light p-3 rounded my-4">
                    
                    <div class="my-3 col-12 text-center">
                        <button id="aa" value="" class="btn btn-info col-12"><h4 class="mt-1 text-center">Click para modificar</h4></button>
                    </div>

                    <form id="frmDatos">
                        <!--Datos del usuario-->
                        <div class="form-row justify-content-between ">
                        
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 my-2">
                                <label for="">Nombres</label>
                                <input type="text" id="nombres" name="nombres" class="form-control permitir" value="<?php echo $nombres; ?>" placeholder="Nombres" disabled>
                            </div>

                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 my-2">
                                <label for="">Primer Apellido</label>
                                <input type="text" id="primerApellido" name="primerApellido" class="form-control permitir" value="<?php echo $primerApellido; ?>" placeholder="Primer Apellido" disabled>
                            </div>

                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 my-2">
                                <label for="">Segundo Apellido</label>
                                    <input type="text" id="segundoApellido" name="segundoApellido" class="form-control permitir" value="<?php echo $segundoApellido; ?>" placeholder="Segundo Apellido" disabled>
                            </div>

                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 my-2">
                                <label for="">Numero DNI</label>
                                <input type="text" id="dni" class="form-control permitir" name="dni" value="<?php echo $dni; ?>" placeholder="DNI" value="12345678" disabled>
                            </div>

                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 my-2">
                                <label for="">Teléfono</label>
                                <input type="text" id="telefono" class="form-control permitir" name="telefono" value="<?php echo $telefono; ?>" placeholder="Teléfono" disabled>
                            </div>

                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 my-2">
                                <label for="">Usuario</label>
                                <input type="text" id="usuario" class="form-control" value="<?php echo $usuarioSesion; ?>" placeholder="Usuario" disabled>
                            </div>

                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 my-2">
                                <label for="">Correo Electrónico</label>
                                <input type="email" id="correo" class="form-control" value="<?php echo $correo; ?>" placeholder="Correo electrónico" disabled>
                            </div>

                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 my-2">
                                <label for="">Contraseña</label>
                                <input type="password" id="password1" name="password1" class="form-control permitir" placeholder="Contraseña" disabled>
                            </div>

                            <div class="col-12 col-sm-12 col-md-12 co-lg-6 col-xl-4 my-2">
                                <label for="">Repetir contraseña</label>
                                <input type="password" id="password2" name="password2" class="form-control permitir" placeholder="Contraseña" disabled>
                            </div>


                        </div>
                        <!--Botones-->
                        <div class="form-row justify-content-around botones my-3">
                            <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                <span class="btn btn-success d-block" id="guardarDatos">Guardar</span>
                            </div>
                            <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                <a class="btn btn-danger d-block" href="usuario.php">Cancelar</a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

            <input style="display:none" name="usuarioSesion" type="text" id="usuarioSesion" value="<?php echo $usuarioSesion ?>">

            <div class="d-none d-xl-block col-md-6 col-lg-6 col-xl-5 my-4">
                <img src="img/modificar.jpg" class="img-fluid imgmodificar rounded" alt="fondomodificar">
            </div>
        </div>
    </div>
    <script src="funcionesJS/modificardatos.js"></script>
</body>
</html>

<?php
} else {
	header("location:index.php");
	}
?>