<?php 

    if($_SESSION['001']=="0" || $_SESSION['001']==null)
    	header("location:index.php#acceso");
    else
    	header("location:usuario.php#misGrupos");

?>