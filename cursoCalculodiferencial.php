<!DOCTYPE html>
<html>
<head>
    <?php 
      include 'consultas.php'; 
      session_start();
      $idCurso = 101;
    ?>

  <link type="text/css" rel="stylesheet" href="css/style_curso1.css">
	<title>C&aacute;lculo Diferencial</title>
</head>
<body style="text-aling:justify;">
        <section id="title">
        C&aacute;lculo Diferencial

        <?php 
                if(empty($_SESSION['sesionUsuario']))
                  echo '<a href="index.php#acceso"><div id="containerAddGrupo"> Inscribirme a Curso</div></a>';
                else{

                  if(verificarCurso($_SESSION['sesionUsuario'],$idCurso))
                   echo '<div id="containerAddGrupo"> Inscrito</div>';
                  else{
                    echo '<form action="altaCurso.php" method="POST">';
                    echo '<input type="text" name="matricula" value="'.$_SESSION['sesionUsuario'].'"'.'class="oculto">';
                    echo '<input type="text" name="idCurso" value="'.$idCurso.'"'.'class="oculto">';
                    echo '<input type="submit" id="containerAddGrupo" value="Inscribirme a Curso" class="btn">';
                    echo '</form>';
                  }
                }

                 
        
         ?>

        </section>
    	
        <div id="Temario">
      <br>
      <h1><b>TEMARIO DEL CURSO</b></h1>
       <br>
       </div>
      <ol id="Estilos1">
        <li>Dedifinici&oacute;n de derivada</li>
        <li>Representaci&oacute;n</li>
        <li>Derivadas comunes</li>
           <ul>
        <li>Funciones algebraicas</li>

        <li>Funciones trigonom&eacute;tricas</li>
           </ul>
        <li>Soluci&oacute;n a ejercicios</li>
      </ol>
      <br>
      <h1><b>PARTE TE&Oacute;RICA</b></h1>
      <div id="PT">
      <p style="text-align:justify;">
      <br>
      <b>Definici&oacute;n de derivada</b>
      <br>
      <br>
      La derivada de una funci&oacute;n es igual: al l&iacute;mite,cuando el incremento de la variable independiente tiende a cero de incremento de la funci&oacute;n sobre el incremento de la variable dependiente. La siguiente ecuaci&oacute;n muestra de manera visual la definici&oacute;n anterior:
      <br>
      <br>
      <div style="text-align:center;">
      <img id="Imagen" src="img/dderivada00.png"/>
      </div>
      </p>
      <br>
      <br>
      <p style="text-align:justify;">
      <b>Representaci&oacute;n</b>
      <br>
      <br>
      Es muy com&uacute;n encontrar una o dos maneras de representar la derivaci&oacute;n de una funci&oacute;n en este apartado mostraremos otras, para que en caso de encontrar ejercicios que usen diferentes notaciones, sepan que solamente se trata de un cambio s&iacute;mbolico, dichas notaciones se muestran en la siguiente igualdad de ecuaciones:
      </p>
      <br>
      <br>
      <div style="text-align:center;">
      <img id="Imagen" src="img/dderivada01.png"/>
      </div>
      <br>
      <br>
       <p style="text-align:justify;">
       <b>Derivadas comunes</b>
      <br>
      <br>
       Este tipo de dervidas son las formas generales para la soluci&oacute;n de ejercicios particulares (ejercicios que pueden variar ya sea si un factor multiplica a la funci&oacute;n o en otros caso el argumento puede estar compuesto por m&aacute;s de un t&eacute;rmino). En este curso hemos decidido dividir en dos familias de derivadas de acuerdo a las funciones a resolver, las cuales son: <b>Funciones algebraicas</b> y <b>Funciones trigonom&eacute;tricas
        </p>
       </b>
       <br>
       <br>
       <p style="text-align:justify;">
       Para el caso de las derivadas de funciones algebraicas, las m&aacute;s generales son las siguientes:
       <br>
       <br>
       <div style="text-align:center;">
      <img id="Imagen1" src="img/dderivada03.png"/>
       
      <img id="Imagen1" src="img/dderivada04.png"/>
      
      <img id="Imagen1" src="img/dderivada05.png"/>
      <br>
      <br>
      <iframe id="Video1" width="420" height="315" src="https://www.youtube.com/embed/0opaDVgBzQA" frameborder="0" allowfullscreen></iframe></iframe>
      <br>
      <br>
      </div>
      </p>
      </div>
<script type="text/javascript" src="js/jquery-1.11.3.js"></script>
    <script type="text/javascript" src="js/agregarGrupo.js"></script>
</body>
</html>