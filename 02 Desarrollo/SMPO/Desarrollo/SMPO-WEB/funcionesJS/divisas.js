function convertir() {
			
    var valor=parseFloat(document.getElementById("cantidad").value);

    if(isNaN(valor)){
        
        alertify.error("Agrega una cantidad por favor.");
        document.getElementById("resultado").innerHTML="Resultado: 0.00";
        document.getElementById("costo").innerHTML="";
        return false;
        
    }else{
        var de=document.getElementById("de").value;
        var a=document.getElementById("a").value;
        var aleatorio = Math.random();
        var aleatorio2 = Math.round(aleatorio*100)/100;
        var dolar = (3+aleatorio2).toFixed(2);
        var euro = (4+aleatorio2).toFixed(2);
        var extrae = document.getElementById("cantidad").value;
        var resultado=0;
        var costo="";

        document.getElementById("dolar").value = dolar;
        document.getElementById("euro").value = euro;
    
        if(de==1&&a==2){
            resultado=valor/dolar;
            document.getElementById("resultado").innerHTML="Resultado: $"+resultado.toFixed(2);
            costo="El valor del dolar es: S/"+dolar;
            document.getElementById("costo").innerHTML=costo;
            document.getElementById("resultado2").value = "$ " + resultado.toFixed(2);
            document.getElementById("descuento").value = "S/ " + extrae;
            document.getElementById("registrarCompra").disabled = false;
        }
        else if(de==1&&a==3){
            resultado=valor/euro;
            document.getElementById("resultado").innerHTML="Resultado: €"+resultado.toFixed(2);
            costo="El valor del euro es: S/"+euro;
            document.getElementById("costo").innerHTML=costo;
            document.getElementById("resultado2").value = "€ " + resultado.toFixed(2);
            document.getElementById("descuento").value = "S/ " + extrae;
            document.getElementById("registrarCompra").disabled = false;
        }
        else if(de==2&&a==1){
            resultado=valor*dolar;
            document.getElementById("resultado").innerHTML="Resultado: S/"+resultado.toFixed(2);
            costo="El valor del dolar es: S/"+dolar;
            document.getElementById("costo").innerHTML=costo;
            document.getElementById("resultado2").value = "S/ " + resultado.toFixed(2);
            document.getElementById("descuento").value = "$ " + extrae;
            document.getElementById("registrarCompra").disabled = false;
        }
        else if(de==2&&a==3){
            resultado=valor*(dolar/euro);
            document.getElementById("resultado").innerHTML="Resultado: €"+resultado.toFixed(2);
            costo="El valor del euro es: S/"+euro;
            document.getElementById("costo").innerHTML=costo;
            document.getElementById("resultado2").value = "€ " + resultado.toFixed(2);
            document.getElementById("descuento").value = "$ " + extrae;
            document.getElementById("registrarCompra").disabled = false;					
        }
        else if(de==3&&a==1){
            resultado=valor*euro;
            document.getElementById("resultado").innerHTML="Resultado: S/"+resultado.toFixed(2);
            costo="El valor del euro es: S/"+euro;
            document.getElementById("costo").innerHTML=costo;
            document.getElementById("resultado2").value = "S/ " + resultado.toFixed(2);
            document.getElementById("descuento").value = "€ " + extrae;
            document.getElementById("registrarCompra").disabled = false;
        }
        else if(de==3&&a==2){
            resultado=valor*(euro/dolar);
            document.getElementById("resultado").innerHTML="Resultado: $"+resultado.toFixed(2);
            costo="El valor del dolar es: S/"+dolar;
            document.getElementById("costo").innerHTML=costo;
            document.getElementById("resultado2").value = "$ " + resultado.toFixed(2);
            document.getElementById("descuento").value = "€ " + extrae;
            document.getElementById("registrarCompra").disabled = false;
        }
        else if(de==1 && a==1 || de==2 && a==2 || de==2 && a==2 ){
            var resultado = document.getElementById("cantidad").value;
            document.getElementById("resultado").innerHTML="Resultado: " + resultado;
            document.getElementById("costo").innerHTML="";
            document.getElementById("registrarCompra").disabled = true;
        };
    };
};

$(document).ready(function(){
    $("#registrarCompra").click(function(){

        if($('#cantidad').val()==""){
        alertify.alert("Agregue una cantidad");
            return false;
        }

        cadena="descuento=" + $('#descuento').val() +
            "&dolar=" + $('#dolar').val() +
            "&euro=" + $('#euro').val() +
            "&resultado2=" + $('#resultado2').val() +
            "&usuario=" + $('#usuario').val();

        pago = $('#descuento').val();
        valorcomprado = $('#resultado2').val();			

        $.ajax({
            type:"POST",
            url:"php/insertar.php",
            data:cadena,
            success:function(r){
                if(r==1){
                    $('#frmajax')[0].reset();
                    $('#resultado').text("Resultado: 0.00");
                    $('#costo').text("");
                    console.log(cadena);
                    alertify.alert("Compra hecha con éxito.<br>" + "Monto pagado: " + pago + "<br>Monto comprado: " + valorcomprado);
                }else{
                    alertify.alert("Algo falló.");
                    console.log(cadena);
                }
            }
        });

        return false;
    });
});