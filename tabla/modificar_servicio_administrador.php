<?php
    include("../conections/conection.php");
    session_start();

    $id= $_GET['mo'];
    $query = ("SELECT * FROM servicios WHERE id_ser='$id'");
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

        <form action="./procesar_modificar_servicio.php" method="GET" name=table autocomplete="off">    <br>

            <table class="tabla">
                <tr>
                
                    <th>Nombre del Servicio</th>

                    <th>Precios del Servicio</th>

                    <th>Editar</th>

                </tr>
                
                
                
                <tr>
                    
                    <h1><input  class="contols" type="hidden" name="id" value="<?php echo $mostrar ['id_ser'] ?>"/></h1>

                    <td><input class="contols" type="text" name="nombre" value="<?php echo $mostrar ['nom_ser'] ?>"></td>

                    <td><input class="contols" type="texto" name="precio" value="<?php echo $mostrar ['precio_ser'] ?>"></td>

                    <td><input type="submit" value="Actualizar" class="submi"></td>
                   
                </tr>
                
            </table>
        </form>
    </div>
</body>
</html>