<!DOCTYPE html>
<html>
<head>
   
    <link rel="stylesheet" type="text/css" href="css/style_usuario.css">

    <script type="text/javascript" src="js/jquery-1.11.3.js"></script>
    <script type="text/javascript" src="js/menu-usuario.js"></script>
    <script type="text/javascript" src="js/scroll-usuario.js"></script>
    <?php include 's.php'; ?>
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
     				<div class="nombre-opc">Mis Grupos</div>
     			</li>
     			
     				<li>
     				  <div class="ico-opc" id="configuracion"></div>
     				  <div class="nombre-opc">Configuraci&oacute;n</div>
     			    </li>
     			
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

            <section id="_grupos" class="section-usuario"></section>

            <section id="_configuracion" class="section-usuario"></section>

        </div>

     </div>

</body>
</html>