$(document).on('ready', Main);


function Main(){

	$('#usuarioForm').on('submit', ejecutarAjax);
}


function ejecutarAjax(event){

	var datosEnviados = {

    	'nombre'    : $('#nombre').val(),
    	'apellidos' : $('#apellidos').val(),
    	'matricula' : $('#matricula').val(),
    	'tipo'      : $('#tipo').val(),
    	'correo'    : $('#correo').val(),
    	'password'  : $('#password').val()
    };

     $.ajax({

     	    type      : 'POST',
            url       : 'registroUsuario.php',
            data      : datosEnviados,
            dataType  : 'json',
            encode    : true

     }).done(function(datos){
     	
          if(datos.exito){
            alert("Usuario Registrado, ahora puedes acceder.");
            window.location.href = "usuario.php#acceso";
          }
          else
          	alert("Error al registrar usuario, vuelve a intentarlo.");

     });

     event.preventDefault();


}