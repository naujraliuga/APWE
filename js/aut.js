$(document).on('ready', Main);


function Main(){

	$('#formLogin').on('submit', ejecutarAjax);
}


function ejecutarAjax(event){

	var datosEnviados = {

    	'matricula' : $('#matricula').val(),
    	'password'  : $('#password').val()
    };

     $.ajax({

     	      type      : 'POST',
            url       : 'autentificar.php',
            data      : datosEnviados,
            dataType  : 'json',
            encode    : true

     }).done(function(datos){
     	
          if(datos.exito)
          	$(location).attr('href','usuario.php');
          else
          	alert("Verifique que sus datos sean correctos.");

     });

     event.preventDefault();


}