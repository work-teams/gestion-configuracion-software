<?
    //Conexion
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

<!--Grafico lineal-->
<div id="graficaLineal"></div>

<!--Codigo crear cadena lineal-->
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

