<?php

include("conexion.php");
$con=conectar();

$fecha=$_POST['fecha'];
$descripcion=$_POST['descripcion'];

$sql="UPDATE carolina SET  descripcion='$descripcion' WHERE fecha='$fecha'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: Mensual.php");
    }
?>