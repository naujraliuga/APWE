<!DOCTYPE html>
<html>
<head>
   
    <link rel="stylesheet" type="text/css" href="css/style_usuario.css">

    <script type="text/javascript" src="js/jquery-1.11.3.js"></script>
    <script type="text/javascript" src="js/menu-usuario.js"></script>
    <?php include 's.php'; ?>
	<title>:: </title>
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
     				<div class="nombre-opc"><?php ''.$_SESSION['nombreUsuario'].'' ?></div>
     			</li>
     			<li>
     				<div class="ico-opc" id="grupos"></div>
     				<div class="nombre-opc">Mis Grupos</div>
     			</li>
     			<a href="salir.php">
     				<li>
     				  <div class="ico-opc" id="configuracion"></div>
     				  <div class="nombre-opc">Configuraci&oacute;n</div>
     			    </li>
     			</a>
     		</ul>
     	</div>


        <div id="container-view"></div>

     </div>

</body>
</html>