<?php

include("conexion.php");
$con=conectar();

$Titulo=$_POST['Titulo'];
$descripcion=$_POST['descripcion'];

$sql="UPDATE sushi SET  descripcion='$descripcion' WHERE Titulo='$Titulo'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: Mensual.php");
    }
?>