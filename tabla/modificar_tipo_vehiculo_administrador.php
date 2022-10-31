<?php
    include("../conections/conection.php");
    session_start();

    $id= $_GET['mo'];
    $query = ("SELECT * FROM tipo_veh WHERE id_veh='$id'");
    $usuario=mysqli_query($mysql, $query);
    $mostrar=mysqli_fetch_assoc($usuario);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/ver_servicio.css">
    <title>Editar</title>
</head>
<body>
    
    <div class="ver">

        <form action="./procesar_modificar_tipo_vehiculo.php" method="GET" name=table autocomplete="off">    <br>

            <table class="tabla">
                <tr>
                
                    <th>Nombre del vehiculo</th>

                    <th>Precios del Vehiculo</th>

                    <th>Editar</th>

                </tr>
                
                
                
                <tr>
                    
                    <h1><input  class="contols" type="hidden" name="id" value="<?php echo $mostrar ['id_veh'] ?>"/></h1>

                    <td><input class="contols" type="text" name="nombre" value="<?php echo $mostrar ['nom_veh'] ?>"></td>

                    <td><input class="contols" type="texto" name="precio" value="<?php echo $mostrar ['precio_veh'] ?>"></td>

                    <td><input type="submit" value="Actualizar" class="submi"></td>
                   
                </tr>
                
            </table>
        </form>
    </div>
</body>
</html>