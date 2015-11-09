<?php 
    
    include 'conexion.php';
    include 'consultas.php';

    $usuario  = $_POST['usuarioPregunta'];
    $pregunta = $_POST['contenidoPregunta'];

    if(empty($usuario) || existeMatricula($usuario)==false)
    	echo 'Por favor verifique e ingrese un usuario valido';
    else{

       $QUERY = mysqli_query($conexion,"INSERT INTO preguntas (id_pregunta,contenido,matricula) VALUES ('','$pregunta','$usuario')");
       if($QUERY)
       	header("location: index.php#pf");
       else
       	echo 'Error al enviar la pregunta, intentelo mas tarde. <a href="index.php#pf">Continuar</a>';

    }

?>