<?php  
    
     include 'conexion.php';
     session_start();

     $usuario  = $_POST['matricula'];
     $password = $_POST['password'];


     $query = mysqli_query($conexion,'SELECT * FROM usuarios WHERE matricula="'.$usuario.'" AND password="'.$password.'"');
     $existe = mysqli_num_rows($query);

     if($existe){
         
         $infoUsuario = mysqli_fetch_array($query);

         $_SESSION['sesionUsuario']    = $infoUsuario['matricula'];
         $_SESSION['nombreUsuario']    = $infoUsuario['nombre'];
         $_SESSION['apellidosUsuario'] = $infoUsuario['apellidos'];
         $_SESSION['passwordUsuario']  = $infoUsuario['password'];
         $_SESSION['tipoUsuario']      = $infoUsuario['tipo'];
         $_SESSION['correoUsuario']    = $infoUsuario['correo'];
         $_SESSION['001']              = 1;
         
         header("location:usuario.php");
     
     }else
         $datos['exito'] = false;


?>