<?php
SESSION_START();

if($_SESSION['001']!="1"){ 
    header("location:index.php"); 
    exit();
}
?>