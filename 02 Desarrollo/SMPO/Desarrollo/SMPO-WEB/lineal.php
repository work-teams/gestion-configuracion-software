<?
    php require_once "php/conexion.php";
    $conexion=conexion();
    $usuario = $_SESSION['user'];
    $sql="SELECT fecha,precioDolar from `$usuario`";
    $result=mysqli_query($conexion,$sql);
    $valoresY=array();//monto
    $valoresX=array();//fechas
    while($ver=mysqli_fetch_row($result)){
        $valoresY[]=$ver[1];
        $valoresX[]=$ver[0];
    }

    $datosX=json_encode($valoresX);
    $datosY=json_encode($valoresY);
?>

<div id="graficaLineal"></div>

<script type="text/javascript">
    function crearCadenaLineal(json){
        var parsed = JSON.parse(json);
        var arr = [];
        for(var x in parsed){
            arr.push(parsed[x]);
        }
        return arr;
    }
</script>

<script type="text/javascript">

    datosX=crearCadenaLineal('<?php echo $datosX ?>');
    datosY=crearCadenaLineal('<?php echo $datosY ?>');


    var Dolar = {
    x: datosX,
    y: datosY,
    type: 'scatter',
    line: {
	    color: 'red',
		width: 2
	},
	marker: {
		color: 'red',
		size: 12
		}
    };
    var layout = {
			title: 'Grafica lineal',
			xaxis: {
				title: 'Fechas'
			},
			yaxis: {
				title: '$$ Montos'
			}
		};

    var data = [Dolar];

    Plotly.newPlot('graficaLineal', data,layout);
</script>