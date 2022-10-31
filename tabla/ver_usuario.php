<?php
    require_once("../conections/conection.php");
?>


<?php
    $ver=("SELECT * FROM usuario,tipo_usu WHERE id_usu=".$_GET["id"]." AND usuario.id_tipo_usu= tipo_usu.id_tipo_usu");
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
    <link rel="stylesheet" href="../css/mostrar_ser.css">
</head>

<body>
    <div class="ver">

        <form method="GET" name=table autocomplete="off">    <br>
        
            <table class="tabla">
                <tr>

                    <th>Identificacion</th>
                    <th>Tipo</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Celular</th>
                    <th>Usuario</th>
                    <th>Email</th>

                </tr>
                
                <tr>

                    <td><?php echo $visualizar ['id_usu'] ?></td>
                    <td><?php echo $visualizar ['tipo'] ?></td>
                    <td><?php echo $visualizar ['nom_usu'] ?></td>
                    <td><?php echo $visualizar ['ape_usu'] ?></td>
                    <td><?php echo $visualizar ['cel_usu'] ?></td>
                    <td><?php echo $visualizar ['usuario'] ?></td>
                    <td><?php echo $visualizar ['email'] ?></td>

                </tr>

            </table>
        </form>
    </div>
</body>
</html>