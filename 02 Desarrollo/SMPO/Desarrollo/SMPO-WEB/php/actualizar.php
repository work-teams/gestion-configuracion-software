<?php 
	
	require_once "conexion.php";


	$conexion=conexion();

		$nombres=$_POST['nombres'];
		$primerApellido=$_POST['primerApellido'];
		$segundoApellido=$_POST['segundoApellido'];
		$dni=$_POST['dni'];
		$telefono=$_POST['telefono'];
		$password=sha1($_POST['password']);
		$usuarioSesion=$_POST['usuarioSesion'];
		

		if(buscaRepetido($dni,$telefono,$conexion)==9){
			echo 2;
		}else if(buscaRepetido($dni,$telefono,$conexion)==8){
			echo 99;
		}else{
			$sql= "UPDATE usuarios set nombres = '$nombres', primerApellido = '$primerApellido', segundoApellido = '$segundoApellido', dni = '$dni', telefono = '$telefono', password = '$password' WHERE usuario = '$usuarioSesion'";

			echo $result=mysqli_query($conexion,$sql);
		}

		function buscaRepetido($dn,$telf,$conexion){

			$sql3 = "SELECT COUNT(*) FROM usuarios WHERE dni = '$dn'";

			$sql4 = "SELECT COUNT(*) FROM usuarios WHERE telefono = '$telf'";
			
			$result3 = mysqli_query($conexion,$sql3);

			$result4 = mysqli_query($conexion,$sql4);

			if(mysqli_num_rows($result3) > 1){
				return 9;
			}else if(mysqli_num_rows($result4) > 1){
				return 8;
			}
			else{
				return 0;
			};


		}
 ?>