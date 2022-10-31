<?php
    require_once("../conections/conection.php");
?>


<?php
    $ver=("SELECT * FROM tipo_veh WHERE id_veh=".$_GET["id"]."");
    $usuario=mysqli_query($mysql, $ver);
    $visualizar=mysqli_fetch_assoc($usuario);
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/ver_servicio.css"
    ><title>ver</title>
</head>

<body>
    <div class="ver">

    <form action="mostrar_ser.php" method="GET" name=table autocomplete="off">    <br>
    
        <table class="tabla">
            <tr>

                <th >Id del vehiculo</th>
            
                <th>Nombre del vehiculo</th>

                <th>Precio del vehiculo</th>
               
            </tr>
            
            <tr>

                <td><?php echo $visualizar ['id_veh'] ?></td>

                <td><?php echo $visualizar ['nom_veh'] ?></td>

                <td><?php echo $visualizar ['precio_veh'] ?></td>


            </tr>

        </table>
    </form>
    </div>

   
    
</body>
</html>