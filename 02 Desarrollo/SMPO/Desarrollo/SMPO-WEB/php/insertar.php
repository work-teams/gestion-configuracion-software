<?php
    require_once "conexion.php";

    $conexion=conexion();
    
    $descuento=$_POST["descuento"];
    $dolar=$_POST["dolar"];
    $euro=$_POST["euro"];
    $compra=$_POST["resultado2"];
    $usuario=$_POST["usuario"];    

    $sql="INSERT into `$usuario` (precioDolar,precioEuro,compra, descuento)
			values ('$dolar','$euro','$compra','$descuento')";
	echo mysqli_query($conexion,$sql);

?>