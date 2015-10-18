<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style_main.css">
	<title>:: AAU</title>
</head>
<body>

      <div id="containerMain">

      	<div id="header">
      		<div id="icon-buap"></div>
      		<div id="title-app">Apoyo Acad&eacute;mico Universitario</div>
      		<div id="menu">
      			<ul>
      				<li id="_inicio">Inicio</li>
      				<li id="_cursos">Cursos</li>
      				<li id="_contacto">Contacto</li>
      				<li id="_pf">Preguntas Frecuentes</li>
              <li id="_acceso">Acceso</li>
      			</ul>
      		</div>
      	</div>
        
        <section id="inicio">

        	<div class="containerInfo">

            <p><span class="black">Descripci&oacute;n :</span> El desarrollo del sistema se plantea a partir de la existencia de un gran numero de alumnos reprobados en diferentes materias impartidas en la facultad.
            </p><br>

            <p><span class="black">Misi&oacute;n :</span> Desarrollar un sistema mediante el cual los alumnos puedan tomar cursos de diferentes materias en las que se les dificulte el aprendizaje</p><br>

            <p><span class="black">Visi&oacute;n :</span> Disminuir la taza de reprobados en las distintas materias mediante el apoyo de alumnos avanzados que actúen como tutor.
            </p><br>
        	</div>

          <div id="containerImg"></div>

        </section>

        <section id="cursos">
                <div id="containerCursos">

                      <div class="curso" id="programacion1">                      
                        <div class="footCurso">
                          <div class="nombreCurso">Programaci&oacute;n 1</div>
                          <div class="tutor">Tutor : Francisco Javier Ram&iacute;rez Tovar</div>
                          <div class="descripcionCurso">
                            <p>En este curso el alumno aprendera los conceptos basicos de programacion 1, manejo de condiciones (if-else,switch,etc), ciclos (for,while, do-while), manejo de arreglos y estructuras en lenguaje C.</p>
                          </div>
                        </div>
                      </div>

                      <div class="curso">                      
                        <div class="footCurso">
                          <div class="nombreCurso">C&aacute;lculo Diferencial</div>
                          <div class="tutor">Juan Hadad Aguilar Romero</div>
                          <div class="descripcionCurso">Este curso esta dividido en tres importantes partes que es el temario, la parte te&oacute;rica y la parte práctica que son la resolución de ejercicios mostrados en un video.</div>
                        </div>
                      </div>
                       
                </div>
        </section>

        <section id="contacto">

          <div id="containerContactos">

              <div class="usuario">
                <div class="foto" id="francisco"></div>
                <div class="infoContacto">
                     Francisco Javier Ram&iacute;rez Tovar
                     <div class="descripContacto">
                       <p>Desarrollador y Tutor<br><br>
                          <a href="http://www.facebook.com/xavi.ramirez99">Facebook</a><br>
                          E-Mail : xavi_991@hotmail.com
                       </p>
                     </div>
                </div>
              </div>

              <div class="usuario">
                <div class="foto" id="francisco"></div>
                <div class="infoContacto">
                     Araceli Ramos Escalante
                     <div class="descripContacto">
                       <p>Desarrollador y Tutor <br><br>
                          <a href="http://www.facebook.com/xavi.ramirez99">Facebook</a><br>
                          E-Mail : ejemplo@hotmail.com
                       </p>
                     </div>
                </div>
              </div>

              <div class="usuario">
                <div class="foto" id="francisco"></div>
                <div class="infoContacto">
                     Juan Hadad Aguilar Romero
                     <div class="descripContacto">
                       <p>Desarrollador y Tutor <br><br>
                          <a href="https://www.facebook.com/Aprendiendo-un-Poco-de-Matemáticas-151881238233314/">Facebook</a><br>
                          E-Mail : naujsigma@gmail.com
                       </p>
                     </div>
                </div>
              </div>

          </div>

        </section>

        <section id="pf">
          <div id="containerPF">
                
                <div class="pregunta">
                  <div class="tituloPregunta">&#191;Como me doy de alta en un curso&#63;</div>
                  <div class="respuestaPregunta">Para darte de alta en un curso selecciona el curso en la secci&oacute;n "Cursos", acontinuaci&oacute;n te mostrara la opci&oacute;n "Inscribirme"</div>
                </div>

                <div class="preguntar" id="preguntar">Hacer Pregunta.</div>

          </div>
        </section>
        
        <div id="bg"><!-- REALIZAR PREGUNTA-->
        </div>
        <div id="containerPregunta">
               <form action="#" method="post">
                <input type="text" name="usuario" placeHolder="[Usuario]" class="txt">
                <input type="text" name="contenidoPregunta" placeHolder="[Pregunta]" class="txt">
                <input type="submit" name="enviarPregunta" value="Enviar Pregunta" class="btn">
               </form>
          </div><!-- FIN REALIZAR PREGUNTA-->

        <section id="acceso">
        
                <div id="containerAcceso">
                  <form id="formLogin" action="autentificar.php" method="POST">
                    <input type="text"     name= "matricula" placeHolder="Usuario" class="txt"> 
                    <input type="password" name= "password" placeHolder="Password" class="txt"> 
                    <input type="submit"   name="login" value="Iniciar Sesi&oacute;n" class="btn">
                  </form>

                   <div id="info">
                      <div class="redir"><a href="registro.php">Registrarme</a></div>
                   </div>
                </div>
        </section>

        <section id="footer"></section>

      </div>

  <script type="text/javascript" src="js/jquery-1.11.3.js"></script>
  <script type="text/javascript" src="js/scroll.js"></script>
  <script type="text/javascript" src="js/pf.js"></script>
</body>
</html>