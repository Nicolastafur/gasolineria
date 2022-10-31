<?php
    require_once("../conections/conection.php");
?>


<?php
    $ver=("SELECT * FROM servicios WHERE id_ser=".$_GET["id"]."");
    $usuario=mysqli_query($mysql, $ver);
    $visualizar=mysqli_fetch_assoc($usuario);
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ver</title>
    <link rel="stylesheet" href="../css/ver_servicio.css">
</head>

<body>
    <div class="ver">

        <form action="mostrar_ser.php" method="GET" name=table autocomplete="off">    <br>
        
            <table class="tabla">
                <tr>

                    <th >Id del servicio</th>
                
                    <th>Nombre del servicio</th>

                    <th>Precio del servicio</th>

                

                </tr>
                
                <tr>

                    <td><?php echo $visualizar ['id_ser'] ?></td>

                    <td><?php echo $visualizar ['nom_ser'] ?></td>

                    <td><?php echo $visualizar ['precio_ser'] ?></td>
                </tr>

            </table>
        </form>
    </div>
</body>
</html>