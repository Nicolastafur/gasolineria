<?php
    require_once("../conections/conection.php");
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/ver.css">
    <title>Servicios</title>
</head>
<body>
    
    <div class="ver">

        <form action="mostrar_ser.php" method="GET" name=table autocomplete="off">    <br>
            <input  class = "buscar"  type = "text"  name = "buscar"   id = ""  placeholder = "Buscar">  <a  href = "#"><button  class = "boton"> Buscar </button></a><br><br>

            <table class="tabla">
                <tr>

                    <th >Id del servicio</th>
                
                    <th>Nombre del servicio</th>

                    <th>Precio del servicio</th>

                    <th>Ver</th>

                </tr>
                
                <?php

                    $query = "SELECT * FROM servicios";
                    $usuario=mysqli_query($mysql, $query);
                    
                    
                    while($mostrar=mysqli_fetch_assoc($usuario)){
                ?>
                
                <tr>

                    <td><?php echo $mostrar ['id_ser'] ?></td>

                    <td><?php echo $mostrar ['nom_ser'] ?></td>

                    <td><?php echo $mostrar ['precio_ser'] ?></td>

                    <td>
                        <a href="?accion=id=<?php echo $mostrar['id_ser'] ?>"onclick="window.open('./ver_servicio.php?id=<?php echo $mostrar['id_ser'] ?>','', 'width=1000,heigth=580,toolbar=NO');void(null);">
                            <img src="../imagenes/lupa.png" alt="buscar">
                        </a>
                    </td>

                </tr>
                <?php
                    }
                ?>
            </table>
        </form>
    </div>
</body>
</html>
