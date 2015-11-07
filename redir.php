<?php 


     $curso = $_POST['buscar-grupo'];


     if($curso==0)
     	echo 'Selecciona un curso <a href="usuario.php#buscar-curso">Intentar de nuevo</a>';
     else{

        if($curso==100)
         header("location: cursoProgramacionI.php");
        elseif ($curso==101) {
        	header("location: cursoCalculodiferencial.php");
        }
     }

 ?>