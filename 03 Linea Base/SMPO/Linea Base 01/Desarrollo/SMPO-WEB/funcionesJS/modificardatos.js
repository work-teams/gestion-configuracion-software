$(document).ready(function(){
    $('#aa').click(function(){
        $("#nombres").prop( "disabled", false);
        $("#primerApellido").prop( "disabled", false);
        $("#segundoApellido").prop( "disabled", false);
        $("#dni").prop( "disabled", false);
        $("#telefono").prop( "disabled", false);
        $("#password1").prop( "disabled", false);
        $("#password2").prop( "disabled", false);

    })
})

$(document).ready(function(){
    $('#guardarDatos').click(function(){
        if($('#nombres').val()==""){
            alertify.alert("Debes agregar el nombre");
            return false;
        }else if($('#primerApellido').val()==""){
            alertify.alert("Debes agregar el primer apellido");
            return false;
        }else if($('#segundoApellido').val()==""){
            alertify.alert("Debes agregar el segundo apellido");
            return false;
        }else if($('#dni').val()==""){
            alertify.alert("Debes agregar el DNI");
            return false;
        }else if($('#dni').val().length!==8){
            alertify.alert("El DNI debe contener 8 dígitos");
            return false;
        }else if($('#telefono').val().length!==9){
            alertify.alert("El teléfono debe contener 9 dígitos");
            return false;
        }else if($('#telefono').val()==""){
            alertify.alert("Debes agregar el telefono");
            return false;
        }else if($('#password1').val()==""){
            alertify.alert("Debes agregar la contraseña");
            return false;
        }else if($('#password2').val()==""){
            alertify.alert("Debes agregar la contraseña");
            return false;
        }else if($('#password1').val() !== $('#password2').val()){
            alertify.alert("Las contraseñas no coinciden");
            return false;
        }else if($('#password1').val().length < 6){
            alertify.alert("Usa una contraseña de al menos 6 digitos");
            return false;
        }
        
        datos = "nombres=" + $('#nombres').val() + "&primerApellido=" + $('#primerApellido').val() + "&segundoApellido=" + $('#segundoApellido').val() + 
        "&dni=" + $('#dni').val() + 
        "&telefono=" + $('#telefono').val() + "&password=" + $('#password1').val() + "&usuarioSesion=" + $('#usuarioSesion').val();

        console.log(datos);

        $.ajax({
            type: "POST",
            url:"php/actualizar.php",
            data:datos,
            success:function(r){

                if(r==2){
                    alertify.alert("Este DNI ya se encuentra registrado, ingrese otro por favor.");
                }else if(r==99){
                    alertify.alert("Este número de telefono se encuentra registrado, ingrese otro por favor..");
                }else if(r==1){
                    alertify.success("Datos modificados con éxito.");
                }else{
                    alertify.alert("Datos fallo.");
                }
            }
        });

    });
});