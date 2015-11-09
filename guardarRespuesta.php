<?php 
    
    include 'conexion.php';
    include 'consultas.php';

    $idPregunta = $_POST['idPregunta'];
    $respuesta = $_POST['respuesta'];

       $QUERY = mysqli_query($conexion,"INSERT INTO respuestas (id_respuesta,contenido,id_pregunta) VALUES ('','$respuesta','$idPregunta')");
       if($QUERY)
       	header("location: index.php#pf");
       else
       	echo 'Error al enviar Respuesta, intentelo mas tarde. <a href="index.php#pf">Continuar</a>';


?>