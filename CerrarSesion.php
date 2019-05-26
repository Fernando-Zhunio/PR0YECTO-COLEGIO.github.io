<?php 
session_start();
if(isset($_SESSION['Cedula'])){
 session_destroy();
 header("location:MainMenuColegio.php");
}

?>