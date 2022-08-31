<?php 
    include("../Php/conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM pizza";
    $query=mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carta Sushi</title>
    <link rel="StyleSheet" href="../Style/css.css" type="text/css">
</head>
<body>
<header>
    <div class="baul_header">
        <img src="https://raw.githubusercontent.com/Brakmel/jubilant-waffle/main/ProyectoUSM/img/Logo_UTFSM-768x677.png">
    </div>
    <div class="baul_header">
        <h1>Universidad Técnica Federico Santa Maria</h1>
    </div>
</header>
    <div class="panel_button">
        <a href="../Php/Administrador.php">
            <input class="input" type="button" value="Administrar salas">
        </a> 
        <a href="">
            <input class="input" type="button" value="Revisar correo">
        </a> 
        <a href="cartaSushi.php">
            <input class="input" type="button" value="Ver semana">
        </a> 
        <a href="../index.php">
            <input class="input" type="button" value="Volver atras">
        </a>  
    </div>
<table>
    <tbody>
        <?php
            while($row=mysqli_fetch_array($query)){
        ?>
            <tr>
                 <th><?php  echo $row['Titulo']?></th>
                <th><?php  echo $row['descripcion']?></th>
                <th><?php  echo $row['imagen']?></th>
                <th><?php  echo $row['precio']?></th>                                          
             </tr>
         <?php 
            }
        ?>
    </tbody>
</table>
</body>
</html>