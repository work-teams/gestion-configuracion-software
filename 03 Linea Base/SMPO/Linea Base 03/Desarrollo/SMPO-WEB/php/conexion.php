/* Conexion a DB MySQL */
<?php 
	function conexion()
	{
		return $conexion=mysqli_connect("localhost","root","","smartmoneyprototipo");
	}
 ?>