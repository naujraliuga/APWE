<?php 

     
     function contGrupos($matricula){//devuelve el numero de cursos de un usuario

     	include 'conexion.php';
        $cont = 0;
     	$CURSO = mysqli_query($conexion,'SELECT * FROM usuarios_cursos WHERE matricula="'.$matricula.'"');
     	$FILAS = mysqli_num_rows($CURSO);

     	if($FILAS >= 1){
           
            while(mysqli_fetch_array($CURSO))
            	$cont++;

     	}

        
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

     function verificarCurso($matricula,$idCurso){

        include 'conexion.php';
        $inscrito = false;
        $verificar = mysqli_query($conexion,'SELECT * FROM usuarios_cursos WHERE matricula ="'.$matricula.'" AND  id_curso = "'.$idCurso.'"');
        $total     =  mysqli_num_rows($verificar);

        if($total>=1){
            $inscrito = true;
        }

        return $inscrito;

     }


     function agregarGrupo($matricula,$idCurso){
        include 'conexion.php';

        $add = mysqli_query($conexion,"INSERT INTO usuarios_cursos (matricula, id_curso) VALUES ('$matricula','id_curso')");
     }


?>