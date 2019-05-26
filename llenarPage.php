<?php
include('Conexion.php');
session_start();
$id = $_SESSION['Cedula'];


if(isset($_GET['llenar'])){

cogerNombres($con,$id);
}

function cogerNombres($con,$id){
    $sql="SELECT Nombres,Apellidos from profesores WHERE Cedula='$id'";
     $resul=mysqli_query($con,$sql);
   $json=array();

   while($var= mysqli_fetch_array($resul))
   {
    $json[]=array(
        'Nombres'=>$var['Nombres'],
        'Apellidos'=>$var['Apellidos']
    );
   }
   echo json_encode($json);
}



function llenarGraficos(){


}

?>