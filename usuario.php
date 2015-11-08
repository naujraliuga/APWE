<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="css/style_usuario.css">


    <script type="text/javascript" src="js/jquery-1.11.3.js"></script>
    <script type="text/javascript" src="js/menu-usuario.js"></script>
    <script type="text/javascript" src="js/scroll-usuario.js"></script>
    <?php include 's.php'; 
    include 'consultas.php';?>
	<title>:: <?php echo ''.$_SESSION['nombreUsuario'].''; ?></title>
</head>
<body>

     <div id="containerMain">

     	<div id="menu-usuario">
     		<ul>
     			<li>
     				<div class="ico-opc" id="home"></div>
     				<div class="nombre-opc">Inicio</div>
     			</li>
     			<li>
     				<div class="ico-opc" id="perfil"></div>
     				<div class="nombre-opc"><?php echo ''.$_SESSION['nombreUsuario'].'' ?></div>
     			</li>
     			<li>
     				<div class="ico-opc" id="grupos"></div>
     				<div class="nombre-opc">Mis Cursos</div>
     			</li>
     			
                <li>
                  <div class="ico-opc" id="upload"></div>
                  <div class="nombre-opc">Subir Archivo</div>
                </li>

     			<li>
     			  <div class="ico-opc" id="configuracion"></div>
     			  <div class="nombre-opc">Configuraci&oacute;n</div>
     			</li>

                <li>
                  <div class="ico-opc" id="buscar"></div>
                  <div class="nombre-opc">Buscar Curso</div>
                </li>
                
                <a href="repositorio.php">
                <li>
                  <div class="ico-opc" id="file"></div>
                  <div class="nombre-opc">Archivos Cursos</div>
                </li>
                </a>
                
                <a href="salir.php">
                <li>
                  <div class="ico-opc" id="logout"></div>
                  <div class="nombre-opc">Salir</div>
                </li>
                </a>
     			
     		</ul>
     	</div>


        <div id="container-view">

            <section id="_home" class="section-usuario">
                
                <div id="bg_home"></div>
                <div class="info-section">
                    <div class="title-section">Bienvenido, lleg&oacute; el momento de aprender</div>
                    <div class="content-section">Apartir de ahora podras tener acceso a nuestros cursos de manera gratuita, si aun no comprendes algun tema 
                    añade a tus grupos la materia que se te dificultad. <br><br> Tambien podras formar parte de nuestro equipo, tienes buenos conocimientos en algun tema, registrate 
                    como tutor y asesora a un grupo de alumno.<br><br>
                    Cuando termines algun curso o te des de baja de el deja tus comentarios evaluando a tu tutor, esto nos servira demasiado 
                    para poder brindar unos mejores cursos.</div>
                </div>
            </section>

            <section id="_perfil" class="section-usuario">
                
                <div class="info-section">
                    <div class="title-section">Mi Perfil</div>
                    <div class="content-section">
                        <div class="info-perfil"><?php echo ''.$_SESSION['nombreUsuario'].''.$_SESSION['apellidosUsuario']; ?></div>
                        <div class="info-perfil"><?php echo ''.$_SESSION['sesionUsuario'].''; ?></div>
                        <div class="info-perfil"><?php echo ''.$_SESSION['correoUsuario'].''; ?></div>
                        <div class="info-perfil">Cursos Actuales : [<?php echo''.contGrupos($_SESSION['sesionUsuario']).''; ?>]</div>
                        <div class="info-perfil">
                            <?php 
                               if($_SESSION['tipoUsuario']==1)
                                echo 'Tipo Usuario : Tutor';
                               else
                                echo 'Tipo Usuario : Alumno';
                        ?>
                        </div>
                    </div>
                </div>
                <div id="bg_perfil"></div>
            </section>

            <section id="_grupos" class="section-usuario">
                 
                 <div id="bg_cursos"></div>
                 <div id="mis_grupos">
                 <ul>
                    <li>Mis Cursos</li>
                 <?php 
                     include 'conexion.php';

                     $CURSO = mysqli_query($conexion,'SELECT * FROM usuarios_cursos WHERE matricula="'.$_SESSION['sesionUsuario'].'"');
                     $FILAS = mysqli_num_rows($CURSO);

                     if($FILAS>=1){
                        
                        while($RES=mysqli_fetch_array($CURSO)){
                            $NOMBRE_GRUPO = getGrupos($RES['id_curso']);

                            if($RES['id_curso']==100){
                               echo '<a href="cursoProgramacionI.php"><li>'.$NOMBRE_GRUPO['nombre'].'</li></a>';
                            }else if($RES['id_curso']==101){
                                echo '<a href="cursoCalculodiferencial.php"><li>'.$NOMBRE_GRUPO['nombre'].'</li></a>';
                            }

                        }
                     }else
                            echo '<li>Sin Cursos</li>';
                ?>
                     </ul>
                 </div>

            </section>

            <section id="_configuracion" class="section-usuario">
                

                <fieldset class="group-section">
                    <legend>Modificar Informaci&oacute;n Personal</legend>

                    <form action="update_usuario.php" method="POST">
                        <input type="text"     name="nombre"    value = <?php echo''.$_SESSION['nombreUsuario'].''; ?>    class="tbx">
                        <input type="text"     name="apellidos" value = <?php echo''.$_SESSION['apellidosUsuario'].''; ?> class="tbx">
                        <input type="text"     name="email"     value = <?php echo''.$_SESSION['correoUsuario'].''; ?>     class="tbx">
                        <input type="text"     name="matricula" value = <?php echo''.$_SESSION['sesionUsuario'].''; ?>    class="tbx">
                        <input type="password" name="password"  value = <?php echo''.$_SESSION['passwordUsuario'].''; ?>  class="tbx">
                        <select name="tipo-usuario" class="cbx">
                            <option value=<?php echo ''.$_SESSION['tipoUsuario'].''; ?>><?php if($_SESSION['tipoUsuario']==1)
                                                       echo'Tutor'; 
                                                       else
                                                        echo'Alumno'; 
                                               ?>
                            </option>
                            <option value="2">Alumno</option>
                            <option value="1">Tutor</option>
                        </select>

                        <input type="submit" value="Guardar Cambios" class="btn">
                    </form>
                </fieldset>

                <fieldset class="group-section">
                    <legend>Dar de baja curso</legend>

                    <form action="eliminar_curso.php" method="POST">
                        <input type="text" name="matricula" value=<?php echo''.$_SESSION['sesionUsuario'].''; ?> class="oculto">
                        <select name="baja-grupo" class="cbx">
                        <?php 
                             include 'conexion.php';

                             $CURSO = mysqli_query($conexion,'SELECT * FROM usuarios_cursos WHERE matricula="'.$_SESSION['sesionUsuario'].'"');
                             $FILAS = mysqli_num_rows($CURSO);

                             if($FILAS>=1){
                        
                                while($RES=mysqli_fetch_array($CURSO)){
                                    $NOMBRE_GRUPO = getGrupos($RES['id_curso']);
                                    echo '<option value="'.$RES['id_curso'].'">'.$NOMBRE_GRUPO['nombre'].'</option>';
                                   
                                }
                             }else
                            echo '<option value="0">Sin Grupos</option>';
                        ?>
                            
                            
                            
                        </select>

                        <input type="submit" value="Eliminar Grupo" class="btn">
                    </form>
                </fieldset>

            </section>

            <section id="upload-file" class="section-usuario">
                <div id="bg_upload"></div>
                <div class="info-section">
                    <div class="title-section">Subir Archivo</div>
                    <div class="content-section">
                         <form  name="subir_archivo" action="subir_archivo.php" method="post" enctype="multipart/form-data" id="form_subir">
                                <input type="file" name="archivo_seleccionado" class="btn-file">
                                <input type="text" name="matricula" value=<?php echo''.$_SESSION['sesionUsuario'].''; ?> class="oculto">
                                <select name="archivo-curso" class="cbx">
                                 <option value="0">Curso al que pertenece el archivo</option>
                                   <?php 
                                    include 'conexion.php';

                                    $CURSO = mysqli_query($conexion,'SELECT * FROM usuarios_cursos WHERE matricula="'.$_SESSION['sesionUsuario'].'"');
                                    $FILAS = mysqli_num_rows($CURSO);

                                    if($FILAS>=1){
                        
                                       while($RES=mysqli_fetch_array($CURSO)){
                                           $NOMBRE_GRUPO = getGrupos($RES['id_curso']);
                                           echo '<option value="'.$RES['id_curso'].'">'.$NOMBRE_GRUPO['nombre'].'</option>';
                                   
                                       }
                                    }else
                                   echo '<option value="0">Sin Grupos</option>';
                                  ?>  
                                </select>
                                <input type="submit" value="Subir" class="btn" id="btn-upload">
                         </form>
                    </div>
                </div>

            </section>

            <section id="buscar-curso" class="section-usuario">
                <div id="bg_buscar">
                    <form action="redir.php" method="POST">
                        <select name="buscar-grupo" class="cbx">
                    <option class="txt-buscar" value ="0">Buscar Cursos...</option>
                        <?php 
                             include 'conexion.php';

                             $CURSO = mysqli_query($conexion,'SELECT * FROM cursos');
                             $FILAS = mysqli_num_rows($CURSO);

                             if($FILAS>=1){
                        
                                while($RES=mysqli_fetch_array($CURSO)){
                                    $NOMBRE_GRUPO = getGrupos($RES['id_curso']);

                                    if($RES['id_curso']==100){
                                       echo '<option value="'.$RES['id_curso'].'">'.$NOMBRE_GRUPO['nombre'].'</option>';
                        
                                    }else if($RES['id_curso']==101){
                                       echo '<option value="'.$RES['id_curso'].'">'.$NOMBRE_GRUPO['nombre'].'</option>';
                                    }
                                   
                                }
                             }else
                            echo '<option value="0">Sin Cursos en el sistema</option>';
                        ?>   
                        </select>
                        <input type="submit" name="buscar-curso" class="btn-buscar" value="Buscar">
                    </form>
                </div>
            </section>

        </div>

     </div>

</body>
</html>