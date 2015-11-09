<!DOCTYPE html>
<html>
<head>
    <?php 
      include 'consultas.php'; 
      session_start();
      $idCurso = 100;
    ?>
    <link rel="stylesheet" type="text/css" href="css/style_curso.css">
	<title>:: Programaci&oacute;n 1</title>
</head>
<body>


    <div id="container-main">
        <section id="title">Programaci&oacute;n 1
        <?php 
                if(empty($_SESSION['sesionUsuario']))
                  echo '<a href="index.php#acceso"><div id="containerAddGrupo"> Inscribirme a Curso</div></a>';
                else{

                  if(verificarCurso($_SESSION['sesionUsuario'],$idCurso))
                   echo '<div id="containerAddGrupo">Inscrito</div>';
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
    	<section id="container-files">
    		<ul>
    			<br> Temario <br>
    			<li class="list-file" id="introduccion">Introducci&oacute;n</li>
                <li class="list-file" id="tipoDeDatos">Tipos de datos</li>
                <li class="list-file" id="estructurasDeControl">Estructuras de control</li>
    		</ul>
    	</section>
    	<section id="container-view-files">

           <section class="containerTema" id="_introduccion">
               <div class="title-tema">Introducci&oacute;n</div>
               <p class="descripcion-tema">
                  Bienvenido al curso de programaci&oacute;n I, en este curso aprender&aacute;s los conceptos basicos 
                  de programaci&oacute;n, con ayuda de un tutor podras comprender mejor los temas que aqui te presentamos.
                  <br><br>
                  La programaci&oacute;n es una actividad de eminentemente pr&aacute;ctica, vaya esto por delante. 
                  Los conceptos te&oacute;ricos pueden ser dif&iacute;ciles de aprehender, pero no son largos, ni 
                  constituyen el n&uacute;cleo de la programaci&oacute;n. <br><br>
                  Por esta raz&oacute;n, presentaremos brevemente los conceptos te&oacute;ricos, pasaremos con la 
                  mayor rapidez posible a la pr&aacute;ctica.<br><br>
                  
                  Cuerpo de un programa en C : <br><br>

                  #include <libreria.h>//librerias<br>
                  #define pi 3.1416 //declaracion de constantes<br><br>
                  int suma(param1 ,param2){//funciones<br>
                      //cuerpo de funcion<br>
                  }<br><br>

                  int main(){//funcion principal del programa<br><br>
                         int a;//declaracion de variables<br>
                         //cuerpo de programa<br><br>
                  }//fin de programa<br>


                  </p> 
           </section>  
           
           <section class="containerTema" id="_tipoDeDatos">
               <div class="title-tema">Tipos de Datos</div>
               <p class="descripcion-tema">
                 El primer objetivo de un programa inform&aacute;tico es el manejo de datos. Un dato es toda aquella informaci&oacute;n que se puede tratar en un programa inform&aacute;tico.
                 En este art&iacute;culo vamos a conocer los tipos de datos que podemos manejar programando en C.
                 Existen unos datos de entrada y unos datos de salida.
                 Los datos de entrada se manipulan en el programa produciendo unos datos de salida.
               <p>
               <div class="img">
                   <img src="img/tipoDatos.png">
               </div>
               <div class="img">
                   <img src="img/declaracionVariable.png">
               </div>
           </section>  
           
           <section class="containerTema" id="_estructurasDeControl">
               <div class="title-tema">Estructuras de Control</div>
               <p class="descripcion-tema">
                 <strong>Estructuras Selectivas :</strong> Las estructuras de selecci&oacute;n (o bifurcaci&oacute;n) se
                 utilizan para elegir entre diversos cursos de acci&oacute;n.En C hay tres tipos de estructuras de
                 selecci&oacute;n: if (selección simple), if…else (selecci&oacute;n doble) y switch (selecci&oacute;n
                 m&uacute;ltiple).<br> 
               <p>
                <div class="img">
                   <img src="img/if.png">
                </div>
                <div class="img">
                   <img src="img/ifelse.png">
                </div>
                <div class="img">
                   <img src="img/switch.png">
                </div>

                <p class="descripcion-tema">
                  <strong>Estructuras Iterativas :</strong> Estas estructuras permiten repetir una serie de veces la ejecuci&oacute;n de unas l&iacute;nneas de 
                 c&oacute;ndigo. Esta iteraci&oacute;n se realiza o bien un n&uacute;mero determinado de veces o bien
                 hasta que se cumpla una determinada condici&oacute;n de tipo l&oacute;ngico o aritm&eacute;tico.
                 En C hay 3 tipos de instrucciones de repetici&oacute;n: while,do…while y for.
               <p>
                <div class="img">
                   <img src="img/while.png">
                </div>
                <div class="img">
                   <img src="img/dowhile.png">
                </div>
                <div class="img">
                   <img src="img/for.png">
                </div>
           </section>  
           

        </section>
    </div>
    <script type="text/javascript" src="js/jquery-1.11.3.js"></script>
    <script type="text/javascript" src="js/menuProgramacion.js"></script>
</body>
</html>