<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" type="text/css" href="css/style_curso.css">
	<title>:: Archivos de Curso</title>
</head>
<body>


    <div id="container-main">
        <section id="title">Archivos de Cursos</section>
    	<section id="container-files">
    		<ul>
    			<br> Archivos de curso <br>
    			<?php  
    			    include 'conexion.php';
    			    include 'consultas.php';

    			    $archivo = mysqli_query($conexion,'SELECT * FROM archivos');
    			    $result  = mysqli_num_rows($archivo);

    			    if($result>=1){

    			    	while($GET_ARCHIVO = mysqli_fetch_array($archivo)){

                              $NOMBRE_CURSO = getGrupos($GET_ARCHIVO['id_curso']);
                              echo '<li class="list-file">'.$NOMBRE_CURSO['nombre'].' : <a href="'.$GET_ARCHIVO['path_f'].'">'.$GET_ARCHIVO['nombre'].'</a></li>';

    			    	}
    			    }else
    			    echo '<li class="list-file">Sin Archivos en el sistema</li>';
    			?>
    			
    			
    		</ul>
    	</section>
    	<section id="container-view" class="bg_files"></section>
    </div>

</body>
</html>