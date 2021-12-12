<?php 
	session_start();

	if(isset($_SESSION['user'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
    <link rel="stylesheet" href="css/estilosComunes.css">
    <title>Smart Money</title>
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
    
    <h1 class="title">Gráfico</h1>
    <div class="graphicbox">
      <div class="gbox">
        <h3 class="title_graph">Setiembre: Dólar vs Euro</h3>
        <div id="grafica">
        </div>
      </div>
    </div>  

    <script src="funcionesJS/grafico.js"></script>
</body>
</html>

<?php
} else {
	header("location:index.php");
	}
?>