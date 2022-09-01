<?php

include("conexion.php");
$con=conectar();

$fecha=$_GET['id'];

$sql="DELETE FROM carolina  WHERE fecha='$fecha'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: Mensual.php");
    }
?>