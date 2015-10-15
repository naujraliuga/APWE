<?php 

     include 'conexion.php';

     $datos = array();

     $matricula = $_POST['matricula'];
     $nombre    = $_POST['nombre'];
     $apellidos = $_POST['apellidos'];
     $password  = $_POST['password'];
     $tipo      = $_POST['tipo'];
     $correo    = $_POST['correo'];

     if(!empty($matricula) && !empty($nombre) && !empty($apellidos) && !empty($password) && !empty($tipo) && !empty($correo)){

     	$insertar = mysqli_query($conexion,'INSERT INTO usuarios VALUES("'.$matricula.'", "'.$nombre.'", "'.$apellidos.'", "'.$password.'", "'.$tipo.'", "'.$correo.'")');

     	if($insertar)
     	  $datos['exito'] = true;
        else
     	  $datos['exito'] = false;
     }else
     	$datos['exito'] = false;

     echo json_encode($datos);

?>