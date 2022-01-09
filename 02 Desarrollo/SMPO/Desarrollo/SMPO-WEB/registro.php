<?php 

	require_once "conexion.php";
	$conexion=conexion();

		//Campos para el registro
		

		//Validar que el usuario es nuevo
		if(buscaRepetido($usuario,$correo,$dni,$conexion)==9){
			echo 2;
		}else if(buscaRepetido($usuario,$correo,$dni,$conexion)==8){
			echo 99;
		}else if(buscaRepetido($usuario,$correo,$dni,$conexion)==10){
			echo 100;
		}
		else{
			//Registrar nuevo usuario
			$sql="INSERT into usuarios (nombres,primerApellido,segundoApellido,dni,telefono,usuario,password,correo)
				values ('$nombres','$primerApellido','$segundoApellido','$dni','$telefono','$usuario','$password','$correo')";
			$sql2 = "CREATE TABLE `$usuario` (
				`id` int(22) NOT NULL AUTO_INCREMENT,
				`precioDolar` float NOT NULL,
				`precioEuro` float NOT NULL,
				`compra` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
				`fecha` timestamp NOT NULL DEFAULT current_timestamp(),
				`descuento` varchar(22) COLLATE utf8_unicode_ci NOT NULL,
				PRIMARY KEY (id)
			  ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci";

			$result2=mysqli_query($conexion,$sql2);
			$result=mysqli_query($conexion,$sql);

			if ($result == 1 and $result2 == 1) {
				echo $result;
			}
		}
		
		//Busqueda de Usuario Repetido
		function buscaRepetido($user,$corr,$dn,$conexion){
			
			$sql="SELECT * from usuarios where usuario='$user'";

			$sql2="SELECT * from usuarios where correo='$corr'";

			$sql3="SELECT * from usuarios where dni='$dn'";
			
			$result=mysqli_query($conexion,$sql);

			$result2=mysqli_query($conexion,$sql2);

			$result3=mysqli_query($conexion,$sql3);
			
			
			if(mysqli_num_rows($result) > 0){
				return 9;
			}else if(mysqli_num_rows($result2) > 0){
				return 8;
			}
			else if(mysqli_num_rows($result3) > 0){
				return 10;
			}
			else{
				return 0;
			}
		}
 ?>