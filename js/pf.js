$(document).ready(function(){


      $("#preguntar").on("click",function(){

      	$("#bg").show("slow");
      	$("#containerPregunta").show("slow");
      	$('html, body').css('overflow-y', 'hidden');
      });

      $("#bg").on("click",function(){

      	$("#bg").hide("slow");
      	$("#containerPregunta").hide("slow");
      	$('html, body').css('overflow-y', 'scroll');
      });

});