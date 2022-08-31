<?php
include("conexion.php");
$con=conectar();

$Titulo=$_POST['Titulo'];
$descripcion=$_POST['descripcion'];


$sql="INSERT INTO sushi VALUES('$Titulo','$descripcion')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: Mensual.php");
    
}else { echo "No se pudo insertar";
}
?>