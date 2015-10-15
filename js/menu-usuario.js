$(document).on('ready',function(){

      $('#menu-usuario').hover(function(){

         $('#menu-usuario').animate({
                'width':'250px'
         },1500);

      }, function(){

               $('#menu-usuario').animate({
                   'width':'45px'
                },1500);
      });


});