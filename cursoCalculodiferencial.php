<!DOCTYPE html>
<html>
<head>
    <?php 
      include 'consultas.php'; 
      session_start();
      $idCurso = 101;
    ?>

  <link type="text/css" rel="stylesheet" href="css/style_curso1.css">
	<title>Bienvenido</title>
</head>
<body style="text-aling:justify;">
        <section id="title">
        <a href="usuario.php#_grupos"class="volver">Volver a mis Cursos</a>
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
      <center><p><b>Figura 1. Uso de l&iacute;mite para c&aacute;lculo de derivada</b></p></center>
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
      <center><p><b>Figura 2. Notaciones de la Derivada</b></p></center>
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
       Para el caso de las derivadas de <b>funciones algebraicas</b>, las m&aacute;s generales son las siguientes:
       <br>
       <br>
       </p>
       <div style="text-align:center;">
      <img id="Imagen1" src="img/dderivada03.png"/>
       
      <img id="Imagen1" src="img/dderivada04.png"/>
      
      <img id="Imagen1" src="img/dderivada05.png"/>
      <br>
      <br>
      <center><p><b>Figura 3. Derivadas de funciones algebraicas</b></p></center>
      <br>
      <br>
        </div>
      <p style="text-align:justify;">
      En la primera imagen se pueden apreciar cuatro derivadas en donde se pueden destacar dos cosas una de ellas es la letra <b>c</b> que es en la manera en la que se denota a una constante y la variable <b>x</b> que forma parte de la funci&oacute;n y que adem&aacute;s es con respecto a lo que se va a derivar la funci&oacute;n.
      <br>
      <br>
      Para la segunda imagen se hacen de forma general las derivadas a operaciones tales como: <b>suma, resta, exponente y ra&iacute;z cuadrada</b> en el inciso 7 y 8 la letra <b>v</b> se usa para ejemplificar una función compuesta, es decir, si esta funci&oacute;n <b>v</b> esta compuesta por m&aacute;s de un t&eacute;rmino lo que se hace primero es derivar la funci&oacute;n original y despu&eacute;s solamente derivar lo que sea <b>v</b>
      <br>
      <br>
      En la &uacute;ltima imagen se derivan con respecto de <b>x</b> a funciones como la ra&iacute;z cuadrada de <b>x</b>, en otro caso tenemos la derivada de la multiplicaci&oacute;n de dos funciones compuestas representadas en el inciso 10 con las letras <b>u</b> y <b>v</b> y en el inciso 11 es la derivada de una divisi&oacute;n.
      </p>
      <br>
      <br>
      <br>
      <p style="text-align:justify;">
       Para el caso de las derivadas de <b>funciones trigonom&eacute;tricas</b>, las m&aacute;s generales son las siguientes:
       <br>
       <br>
       </p>
      <div style="text-align:center;">
      <img id="Imagen2" src="img/dderivada06.png"/>
      <center><p><b>Figura 4. Derivadas de funciones trigonom&eacute;tricas</b></p></center> 
      <br>
      </div>
      <p style="text-align:justify;">
      Como se podr&aacute; dar cuenta lo más destacable en las derivadas de funciones trigonom&eacute;tricas son precisamente eso, las derivadas a ese tipo de funciones con la particularidad de que estas en su argumento representado por la letra <b>v</b> y derivadas con respecto de <b>x</b> dan como resultado otras funciones del mismo tipo, dado que su argumento es un argumento compuesto resumido en un sola letra <b>v</b> a este tambi&eacute;n se le deriva, es decir, el resultado de dervidar la funci&oacute;n trigonom&eacute;trica multiplicado por la derivada con respecto de <b>x</b> del argumento de la funci&oacute;n.
      <br>
      <br>
      <br>
      <br>
      </p>
      </div>
      <h1><b>PARTE PR&Aacute;CTICA</b></h1>
      <div id="PP">
      <p style="text-align:justify;">
      <br>
      <b>Soluci&oacute;n a ejercicios</b>
      <br>
      <br>
      Este apartado consiste en la soluci&oacute;n de ejercicios propuestos, los cuales mediante el uso de herramientas interactivas como lo son los video tutoriales.
      </p>
      </div>

<script type="text/javascript" src="js/jquery-1.11.3.js"></script>
    <script type="text/javascript" src="js/agregarGrupo.js"></script>
</body>
</html>