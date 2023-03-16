function ValidarCorreo(){

    let Correo = $("#correoelectronico").val();

    $.ajax({
        type: 'POST',
        url: '../Controllers/usuariosController.php',
        data: {
            'BuscarUsuario':'BuscarUsuario',
             'Correo' : Correo
        },
        success: function (res){
         if(res == "OK"){
            alert(res);
            $('#btnIniciarSesion').prop("disabled",true);
         }
            else{
                $('#btnIniciarSesion').prop("disabled",false);
            }
         }
        });
}