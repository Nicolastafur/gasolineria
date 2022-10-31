<?php
    session_start();
    include("../includes/validarsesion.php");
?>

<?php
    require_once("../conections/conection.php");
    
    $query = "SELECT * FROM usuario,tipo_usu where id_usu='".$_SESSION['id']."' and usuario.id_tipo_usu= tipo_usu.id_tipo_usu";
    $usuario=mysqli_query($mysql, $query);
    $fila=mysqli_fetch_assoc ($usuario);
        
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/expendedor.css">
    <title>Empleado</title>
</head>

<header>
    <div id="subheader">
        <div id="logotipo"><img src="../imagenes/logo gasolineria.png"></div>
        <nav>
            <ul>
                <li><a>Bienvenido 
                        <?php echo $fila['nom_usu'];?>
                        <?php echo $fila['ape_usu'];?>
                    </a>
                </li>
                
                <li><a href="../includes/salir.php">Salir</a></li>
            </ul>
        </nav>
    </div>
</header>

<body>
    <nav class="titulo">
        <h2> Bienvenido
            <?php echo $fila['nom_usu'];?> 
            <?php echo $fila['id_usu'];?>
        </h2>

    </nav>

    <div class="contenedor">

        <div class="bloque1">
        
            <ul>
                <a href="../tabla/servicios.php">Servicios</a>
            </ul>
        </div>

        <div class="bloque2">
            
            <ul>
                <a href="../Tabla/tipo_veh.php">Tipo de vehiculo</a>
            </ul>
        </div>

        <div class="bloque3">

            <ul>
                <a href="#">Venta</a>
            </ul>
        </div>

        <div class="bloque4">

            <ul>
                <a href="#">Reporte del cliente</a>
            </ul>
        </div>
        
    </div>
</body>