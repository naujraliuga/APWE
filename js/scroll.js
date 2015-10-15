  $(document).ready(function() {

   $('#_inicio').on("click",function () {

       $('html, body').animate({
           scrollTop: '0px'
       },1100);

   });

    $('#_cursos').on("click",function () {

       $('html, body').animate({
           scrollTop: '620px'
       },1500);

   });
 
   $('#_contacto').on("click",function () {

       $('html, body').animate({
           scrollTop: '1240px'
       },1500);

   });

   $('#_pf').on("click",function () {

       $('html, body').animate({
           scrollTop: '1860px'
       },1500);

   });

   $('#_acceso').on("click",function () {

       $('html, body').animate({
           scrollTop: '2480px'
       },1500);

   });

}); 