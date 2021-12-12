$(document).ready(function(){
    $('#registrarNuevo').click(function(){

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
        }else if($('#telefono').val()==""){
            alertify.alert("Debes agregar el telefono");
            return false;
        }else if($('#dni').val().length!==8){
            alertify.alert("El DNI debe contener 8 dígitos");
            return false;
        }else if($('#telefono').val().length!==9){
            alertify.alert("El teléfono debe contener 9 dígitos");
            return false;
        }else if($('#usuario').val()==""){
            alertify.alert("Debes agregar el usuario");
            return false;
        }else if($('#fechaNac').val()==""){
            alertify.alert("Debes agregar la fecha de nacimiento");
            return false;
        }else if($('#password').val()==""){
            alertify.alert("Debes agregar la contraseña");
            return false;
        }else if($('#correo').val()==""){
            alertify.alert("Debes agregar el correo");
            return false;
        }else if($('#password').val().length<6){
            alertify.alert("Por tu seguridad, usa una contraseña de al menos 6 dígitos");
            return false;
        }

        cadena="nombres=" + $('#nombres').val() + 
                "&primerApellido=" + $('#primerApellido').val() + 
                "&segundoApellido=" + $('#segundoApellido').val() + 
                "&dni=" + $('#dni').val() + 
                "&telefono=" + $('#telefono').val() + 
                "&usuario=" + $('#usuario').val() + 
                "&password=" + $('#password').val() +
                "&correo=" + $('#correo').val();

                $.ajax({
                    type:"POST",
                    url:"php/registro.php",
                    data:cadena,
                    success:function(r){

                        if(r==2){
                            alertify.alert("Usuario ya registrado, ingrese otro por favor.");
                        }else if(r==100){
                            alertify.alert("Numero de DNI se encuentra registrado.");
                        }
                        else if(r==99){
                            alertify.alert("Correo ya registrado, ingrese otro por favor.");
                        }
                        else if(r==1){
                            $('#frmRegistro')[0].reset();
                            alertify.success("Usuario registrado con éxito.");
                        }else{
                            alertify.error("Error al registrar. Intente de nuevo.");
                        }
                    }
                });
    });
});