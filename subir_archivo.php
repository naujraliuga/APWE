
<html>
<head>
	<title>Archivo Enviado</title>
</head>
<body>

    <?php 
      
     require_once 'conexion.php';
     $matricula = $_POST['matricula'];
     $idCurso   = $_POST['archivo-curso'];
     $archivo = (isset($_FILES['archivo_seleccionado'])) ? $_FILES['archivo_seleccionado'] : null;
     $nombreArch = $archivo['name'];

     if($archivo){

         $ruta_destino_archivo = "archivos/{$archivo['name']}";
         $archivo_ok = move_uploaded_file($archivo['tmp_name'],$ruta_destino_archivo);
         
       

     }


        if (isset($archivo)):
              if ($archivo_ok):

              	$insertar = mysqli_query($conexion, "INSERT INTO archivos (id_archivo,matricula,nombre,path_f,id_curso) VALUES ('','$matricula','$nombreArch','$ruta_destino_archivo','$idCurso')");

                     if($insertar){
                       echo '<label class="alert"><strong> El archivo ha sido subido correctamente. </strong>    <a href="usuario.php">Continuar</a></label>';
                     }  
                     else{
                       echo  'Error : '.mysql_error();
                     }

                  
              else:
                  echo '<span style="color: #f00;" class="alert"> Error al intentar subir el archivo. (puede que no haya seleccionado nada, <a href="usuario.php">intentalo otra vez</a>) </span>';
              endif; 
        endif; 

    ?>


</body>
</html>