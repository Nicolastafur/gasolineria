<?php
    require_once("../conections/conection.php");
?>


<?php
    $ver=("SELECT * FROM tipo_usu WHERE id_tipo_usu=".$_GET["id"]."");
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

        <form action="mostrar_tipo_usu.php" method="GET" name=table autocomplete="off">    <br>
        
            <table class="tabla">
                <tr>

                    <th>Identificacion</th>
                
                    <th>Tipo</th>

                    <th>Salario</th>

                

                </tr>
                
                <tr>

                    <td><?php echo $visualizar ['id_tipo_usu'] ?></td>

                    <td><?php echo $visualizar ['tipo'] ?></td>

                    <td><?php echo $visualizar ['salario'] ?></td>
                </tr>

            </table>
        </form>
    </div>
</body>
</html>