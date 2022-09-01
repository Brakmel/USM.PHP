<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM carolina";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USM.CL</title>
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
            <a href="../index.php">
                <input class="input" type="button" value="Volver atras">
            </a>   
        </div>
    <form class="form_buscador" action="" method="get">
        <input class="buscador" type="date" name="busqueda">
        <input class="buscador_click" type="submit" name="enviar" value="¡Buscame la fecha indicada!">
    </form>
    <main>
    <?php
    if(isset($_GET['enviar'])) {
        $busqueda = $_GET['busqueda'];

        $consulta = $con->query("SELECT * FROM carolina WHERE fecha LIKE '%$busqueda%'");

        while ($row = $consulta->fetch_array()) {
            echo $row['fecha'].'<br>';
        }
    }
    ?>
    <form action="insertar.php" method="POST" enctype="multipart/formdata" required>
        <input type="date"  name="fecha" required>
        <input type="text" class="descrip"  name="descripcion" placeholder="Aquí escriba toda la informacion restante." required>
        <input type="submit" value="Generar tabla">
    </form>
    <table>
            <tbody>
                <?php
                    while($row=mysqli_fetch_array($query)){
                ?>
                    <tr>
                        <th><?php  echo $row['fecha']?></th>
                        <th><?php  echo $row['descripcion']?></th>
                        <th><a href="actualizar.php?id=<?php echo $row['fecha'] ?>" >Modificar</a></th>
                        <th><a href="delete.php?id=<?php echo $row['fecha'] ?>" >Eliminar</a></th>                                          
                    </tr>
                <?php 
                    }
                ?>
            </tbody>
    </table>
</body>
</html>