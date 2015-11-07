<?php 
   
   include 'conexion.php';

   $matricula = $_POST['matricula'];
   $id_curso  = $_POST['idCurso']; 

   $add = mysqli_query($conexion,"INSERT INTO usuarios_cursos (matricula,id_curso) VALUES ('$matricula','$id_curso')");

   if($add)
   	echo 'Inscrito en el curso <a href="usuario.php#_grupos">Continuar</a>';
   else
   	echo 'Error '.mysql_error();

?>