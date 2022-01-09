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
            //Elementos de lista
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

            <div class="col-12 col-md-12 col-lg-12 col-xl-8">
            
                <div class="panel panel-body bg-light rounded mt-2">

                    <div class="col-12 tabla">
                        <table class="table mt-2 table-bordered table-hover">

                            <thead>
                                // Campos de Tabla
                                <tr class="bg-primary text-center text-white">
                                    <th>Pagado</th>
                                    <th>Comprado</th>
                                    <th>Dólar</th>
                                    <th>Euro</th>
                                    <th>Fecha</th>
                                </tr>
                            </thead>

                            <tbody>
                            <?php 
                                $inc = include("php/dbdbd.php");
                                $usuario = $_SESSION['user'];
                                if ($inc) {
                                    $consulta = "SELECT * FROM `$usuario` ORDER BY id DESC";
                                    $resultado = mysqli_query($conex,$consulta);
                                    if ($resultado) {
                                        while ($row = $resultado->fetch_array()) {
                                            $descuento = $row['descuento'];
                                            $compra = $row['compra'];
                                            $precioDolar = $row['precioDolar'];
                                            $precioEuro = $row['precioEuro'];
                                            $fecha = $row['fecha'];?>
                            <div>
                                <tr class="text-center">
                                    <td><?php echo $descuento ?></td>
                                    <td><?php echo $compra ?></td>
                                    <td><?php echo $precioDolar ?></td>
                                    <td><?php echo $precioEuro ?></td>
                                    <td><?php echo $fecha ?></td>
                                </tr>
                            </div> 
                            <?php
                                        }
                            }
                                    }
                                ?>
                        </table>
                    </div>

                </div>
            </div>

            <div class="d-none d-md-block col-md-6 col-lg-6 col-xl-4">
                <div class="my-2 col-12 text-center">
                    <h3 class="d-block bg-warning py-1 mx-2 rounded">Historial de transacciones</h3>
                    <img src="img/fondoHistorial.jpg" class="img-fluid imgmodificar2 rounded" alt="fondomodificar">
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php
} else {
	header("location:index.php");
	}
?>