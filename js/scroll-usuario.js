$(document).on('ready',function(){

     tam1 = $('#_home').height();//altura div perfil
     tam2 = $('#_perfil').height();//altura div proyectos
     tam3 = $('#_grupos').height();//altura div hobbies
     tam4 = $('#_configuracion').height();//altura div objetivos
     
    $('#home').on('click',function(){
        
       $('html, body').animate({
           scrollTop: '0px'
       },1100);

    });

    $('#perfil').on('click',function(){
        
       $('html, body').animate({
           scrollTop: tam1
       },1500);

    });

    $('#grupos').on('click',function(){
        
       $('html, body').animate({
           scrollTop: tam1+tam2
       },1500);

    });

    $('#configuracion').on('click',function(){
        
       $('html, body').animate({
           scrollTop: tam1+tam2+tam3
       },1500);

    });



});