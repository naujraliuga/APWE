<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style_main.css">
  <script type="text/javascript" src="js/jquery-1.11.3.js"></script>
  <script type="text/javascript" src="js/insertarUsuario.js"></script>
	<title>:: Registro | Usuario</title>
</head>
<body>

       <section id="header-registro">
       	<div class="title-registro">Registro Usuario</div>
       </section>
       <section id="registro">
                <form id="usuarioForm">
                	<input type="text"      id ="nombre"    placeHolder="Nombre"     class="txt">
                	<input type="text"      id ="apellidos" placeHolder="Apellido Paterno"  class="txt">
                	<input type="text"      id ="matricula" placeHolder="Matricula"  class="txt">
                  <input type="password"  id ="password"  placeHolder="Password"   class="txt">
                  <input type="email"     id ="correo"    placeHolder="E-Mail"     class="txt">
                	<input type="text"      id ="tipo"      value="2"                class="txt oculto">
                	     <input type="submit" value="Registrarme" class="btn">
                </form>
       </section>

</body>
</html>