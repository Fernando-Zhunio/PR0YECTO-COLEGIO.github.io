<?php

include('Conexion.php');
session_start();

if(isset($_POST['user']) && isset($_POST['clave']))
{
  // $loginUser = $_POST['user'];
  // $loginClave = $_POST['clave']; 
  $loginUser =mysqli_real_escape_string($con,$_POST['user']);
  $loginClave = mysqli_real_escape_string($con,$_POST['clave']);

$sql="SELECT Cedula from profesores WHERE (Cedula='$loginUser' or Correo='$loginUser') and Contrasena ='$loginClave'";
$resul=mysqli_query($con,$sql);
$num_row=mysqli_num_rows($resul);
if($num_row==1){
  $data=mysqli_fetch_array($resul);
  $_SESSION['Cedula']=$data['Cedula'];
  echo '1';
}
else{
 echo 'error12';
}  
}
else{
  echo 'no increso';
}
?>