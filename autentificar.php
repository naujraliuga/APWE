<?php  
    
     include 'conexion.php';
     session_start();

     $usuario  = $_POST['matricula'];
     $password = $_POST['password'];

     $datos = array();

     $query = mysqli_query($conexion,'SELECT * FROM usuarios WHERE matricula="'.$usuario.'" AND password="'.$password.'"');
     $existe = mysqli_num_rows($query);

     if($existe){
         
         $datos['exito'] = true;
         $infoUsuario = mysqli_fetch_array($query);

         $_SESSION['sesionUsuario']    = $infoUsuario['matricula'];
         $_SESSION['nombreUsuario']    = $infoUsuario['nombre'];
         $_SESSION['apellidosUsuario'] = $infoUsuario['apellidos'];
         $_SESSION['passwordUsuario']  = $infoUsuario['password'];
         $_SESSION['tipoUsuario']      = $infoUsuario['tipo'];
         $_SESSION['correoUsuario']    = $infoUsuario['correo'];
         $_SESSION['001']              = 1;
     
     
     }else
         $datos['exito'] = false;

         echo json_encode($datos);

?>