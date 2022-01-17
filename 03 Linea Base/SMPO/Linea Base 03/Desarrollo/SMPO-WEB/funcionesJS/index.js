$(document).ready(function(){
    $('#entrarSistema').click(function(){
        if($('#usuario').val()=="" && $('#password').val()!==""){
            alertify.alert("Usuario vacío");
            return false;
        }else if($('#password').val()=="" && $('#usuario').val()!==""){
            alertify.alert("Contraseña vacía");
            return false;
        }else if($('#password').val()=="" && $('#usuario').val()==""){
            alertify.alert("Campos vacíos");
            return false;
        }

        cadena="usuario=" + $('#usuario').val() + 
                "&password=" + $('#password').val();

                $.ajax({
                    type:"POST",
                    url:"php/login.php",
                    data:cadena,
                    success:function(r){
                        if(r==1){
                            window.location="principal.php";
                        }else{
                            alertify.alert("Datos incorrectos");
                        }
                    }
                });
    });	
});

function mostrarPassword(){
    var cambio = document.getElementById("password");
    if(cambio.type == "password"){
        cambio.type = "text";
        $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
    }else{
        cambio.type = "password";
        $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
    }
}