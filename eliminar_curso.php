<?php

include('conexion.php');


$grupo_baja  = $_POST['baja-grupo'];
$matricula   = $_POST['matricula'];



$DELETE = mysqli_query($conexion,"DELETE FROM usuarios_cursos WHERE matricula = '$matricula' AND id_curso= '$grupo_baja' ");


if($DELETE){
header('Location: usuario.php#_configuracion');

}  

else{
echo  mysql_error() ;
}

?>