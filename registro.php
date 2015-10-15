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
       	<span>Registro Usuario</span>
       </section>
       <section id="registro">
                <form id="usuarioForm">
                	<input type="text"      id ="nombre" placeHolder="Nombre"       class="txt">
                	<input type="text"      id ="apellidos" placeHolder="Apellidos" class="txt">
                	<input type="text"      id ="matricula" placeHolder="Matricula" class="txt">
                  <input type="password"  id ="password" placeHolder="Password"   class="txt">
                	<input type="email"     id ="correo" placeHolder="E-Mail"       class="txt">
                	<select id ="tipo" class="cbx">
                		<option value="alumno">Tipo de Usuario</option>
                		<option value="2">Alumno</option>
                		<option value="1">Tutor</option>
                	</select>
                	     <input type="submit" value="Registrarme" class="btn">
                </form>
       </section>

</body>
</html>