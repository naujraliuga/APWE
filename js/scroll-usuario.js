$(document).on('ready',function(){

     tam1 = $('#_home').height();//altura div perfil
     tam2 = $('#_perfil').height();//altura div proyectos
     tam3 = $('#_grupos').height();//altura div hobbies
     tam4 = $('#_configuracion').height();//altura div objetivos
     tam5 = $('#upload-archivo').height();//altura div upload
     tam6 = $('#buscar-curso').height();//altura div buscar
     
    $('#home').on('click',function(){
        
       $('html, body').animate({
           scrollTop: '0px'
       },1100);

    });

    $('#perfil').on('click',function(){
        
       $('html, body').animate({
           scrollTop: tam1+15
       },1500);

    });

    $('#grupos').on('click',function(){
        
       $('html, body').animate({
           scrollTop: tam1+tam2+30
       },1500);

    });

    $('#configuracion').on('click',function(){
        
       $('html, body').animate({
           scrollTop: tam1+tam2+tam3+45
       },1500);

    });

    $('#upload').on('click',function(){
        
       $('html, body').animate({
           scrollTop: tam1+tam2+tam3+tam4+60
       },1500);

    });

    $('#buscar').on('click',function(){
        
       $('html, body').animate({
           scrollTop: tam1+tam2+tam3+tam4+tam5+tam6+75
       },1500);

    });



});