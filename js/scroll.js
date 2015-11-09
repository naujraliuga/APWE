  $(document).ready(function() {

   tam1 = $('#inicio').height();//altura div perfil
   tam2 = $('#cursos').height();//altura div perfil
   tam3 = $('#contacto').height();//altura div perfil
   tam4 = $('#pf').height();//altura div perfil
   tam5 = $('#acceso').height();//altura div perfil

   $('#_inicio').on("click",function () {

       $('html, body').animate({
           scrollTop: '0px'
       },1100);

   });

    $('#_cursos').on("click",function () {

       $('html, body').animate({
           scrollTop: tam1
       },1500);

   });
 
   $('#_contacto').on("click",function () {

       $('html, body').animate({
           scrollTop: tam1+tam2
       },1500);

   });

   $('#_pf').on("click",function () {

       $('html, body').animate({
           scrollTop: tam1+tam2+tam3
       },1500);

   });

   $('#_acceso').on("click",function () {

       $('html, body').animate({
           scrollTop: tam1+tam2+tam3+tam4
       },1500);

   });

}); 