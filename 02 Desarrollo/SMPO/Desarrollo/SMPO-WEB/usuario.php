<?php 

  session_start();
  
  $myusuario = $_SESSION['user'];
  $myusuario = strtoupper($myusuario);
  if(isset($_SESSION['user']))
  {
    ?>
      <!DOCTYPE html>
      <html lang="en">

      <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Smart Money</title>        
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

        <a class="user-name"><?php echo $myusuario ?></a>

        <div class="user-btn">
          <div class="user-box">
            <a href="modificardatos.php">Datos<img src="img/datos_usuario.png"></a>
            
          </div>
          <div class="user-box" >
            <a href="historial.php" style="  margin-left: 105px;margin-right: 105px;">Historial<img src="img/historial_usuario.png"></a>
            
          </div>          
        </div>

      </body>
      </html>
    <?php
  } else {
    header("location:index.php");
  }
?>