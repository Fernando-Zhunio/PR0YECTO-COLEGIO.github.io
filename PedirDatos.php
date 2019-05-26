<?php
include("Conexion.php");
  
  if(isset($_POST['cedula']))
  {
      //  $query="select COUNT(*) from profesores WHERE Cedula = '"+$cedula+"' and Contraseña='"+$contrasena+"'";   
      $sql = 'INSERT INTO estudiantes(Cedula,Nombres,Apellidos,Edad,Direccion) VALUES( 10241160,\'Alfonso\',\'Reyes\',28,\'El fortin\')';
      $success = mysqli_query($con,$sql);
       if($success){
         echo 'bien';
       }
       else{
         echo ' mal';
       }
      echo'pase pedirDatos';
  }
  else{
    echo 'no permitido ';
  }
 






?>