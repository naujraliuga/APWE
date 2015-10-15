<?php  

    $conexion = mysqli_connect("localhost","root","","db_aau");

    if(!$conexion){
      	return "Sin Conexion a la base de datos**";
      }
?>