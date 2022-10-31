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
    <link rel="stylesheet" href="../css/ver_administrador.css">
    <title>Tipos de vehiculos</title>
</head>
<body>
    
    <div class="ver">

        <form action="./mostar_tipo_vehiculo.php" method="GET" name=table autocomplete="off">    <br>
            <input  class = "buscar"  type = "text"  name = "buscar"   id = ""  placeholder = "Buscar">  <a  href = "#"><button  class = "boton"> Buscar </button></a><br><br>

            <table class="tabla">
                <tr>

                    <th >Id del vehiculo</th>
                
                    <th>Nombre del vehiculo</th>

                    <th>Precio del vehiculo</th>


                    <th><img src="../imagenes/ver.png" alt="modificar"></th>

                    <th><img src="../imagenes/lupa.png" alt="ver"></th>

                    <th><img src="../imagenes/borrar .png" alt="eliminar"></th>

                    <th><img src="../imagenes/modificar.png" alt="modificar"></th>


                </tr>
                
                <?php

                    $query = "SELECT * FROM tipo_veh";
                    $usuario=mysqli_query($mysql, $query);
                    
                    
                    while($mostrar=mysqli_fetch_assoc($usuario)){
                ?>
                
                <tr>

                    <td><?php echo $mostrar ['id_veh'] ?></td>

                    <td><?php echo $mostrar ['nom_veh'] ?></td>

                    <td><?php echo $mostrar ['precio_veh'] ?></td>


                    <td>
                        <a href="?accion=mo=<?php echo $mostrar['id_veh'] ?>"onclick="window.open('./modificar_tipo_vehiculo_administrador.php?mo=<?php echo $mostrar['id_veh'] ?>','', 'width=1000,heigth=580,toolbar=NO');void(null);" class="button">
                            Modificar
                        </a>
                    </td>

                    <td>
                        <a href="?accion=id=<?php echo $mostrar['id_veh'] ?>"onclick="window.open('./ver_tipo_vehiculo.php?id=<?php echo $mostrar['id_veh'] ?>','', 'width=1000,heigth=580,toolbar=NO');void(null);" class="button">
                           Ver
                        </a>
                    </td>

                    <td>
                        <a href="?accion=el=<?php echo $mostrar['id_veh'] ?>"onclick="window.open('./eliminar_tipo_vehiculo.php?el=<?php echo $mostrar['id_veh'] ?>','', 'width=1000,heigth=580,toolbar=NO');void(null);" class="button">
                            Eliminar
                        </a>
                    </td>

                    <td><a href="../tipo_veh.php">Registrar</a></td>

                </tr>
                <?php
                    }
                ?>
            </table>
        </form>
    </div>
</body>
</html>
