<?php
include("conexion.php");
$con=conectar();

$fecha=$_POST['fecha'];
$descripcion=$_POST['descripcion'];


$sql="INSERT INTO carolina VALUES('$fecha','$descripcion')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: Mensual.php");
    
}else { echo "No se pudo insertar";
}
?>