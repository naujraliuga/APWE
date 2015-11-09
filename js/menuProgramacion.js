$(document).on('ready', function(){
	
     $('#introduccion').on('click',function(){

          $('#_introduccion').show('slow');
          $('#_tipoDeDatos').hide('slow');
          $('#_estructurasDeControl').hide('slow');
          $('#_funciones').hide('slow');
     });

     $('#tipoDeDatos').on('click',function(){

          $('#_introduccion').hide('slow');
          $('#_tipoDeDatos').show('slow');
          $('#_estructurasDeControl').hide('slow');
          $('#_funciones').hide('slow');
     });

     $('#estructurasDeControl').on('click',function(){

          $('#_introduccion').hide('slow');
          $('#_tipoDeDatos').hide('slow');
          $('#_estructurasDeControl').show('slow');
          $('#_funciones').hide('slow');
     });



});