<?php
include('conexion.php');

$nombre       = $_POST['nombre'];
$apellidos    = $_POST['apellidos'];
$email        = $_POST['email'];
$matricula    = $_POST['matricula'];
$password     = $_POST['password'];
$tipo_usuario = $_POST['tipo_usuario'];



$UPDATE = mysqli_query($conexion, "UPDATE usuarios SET matricula='$matricula', nombre='$nombre', apellidos='$apellidos', password='$password', tipo='$tipo_usuario', correo='$email' WHERE matricula='$matricula' ");

if($UPDATE){
header('Location: usuario.php#_configuracion');

}  

else{
echo  mysql_error() ;
}
?>