<?php 

     
     function contGrupos($matricula){//devuelve el numero de cursos de un usuario

     	include 'conexion.php';

     	$CURSO = mysqli_query($conexion,'SELECT * FROM usuarios_cursos WHERE matricula="'.$matricula.'"');
     	$FILAS = mysqli_num_rows($CURSO);

     	if($FILAS >= 1){
           
            while(mysqli_fetch_array($CURSO))
            	$cont++;

     	}else
     	  $cont = 0;

        
        return $cont;
     }

     function getGrupos($idGrupo){

        include 'conexion.php';
        $CURSO = mysqli_query($conexion,'SELECT * FROM cursos WHERE id_curso="'.$idGrupo.'"');
        $MI_CURSO = mysqli_num_rows($CURSO);

        if($MI_CURSO==1){
            $C = mysqli_fetch_array($CURSO);
        }else
         $C = null;

         return $C;

       

     }


?>