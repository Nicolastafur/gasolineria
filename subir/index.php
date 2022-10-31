<?php
    require_once("php/conexion.php");
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>subir imagenes</title>
</head>
<body>
    <div class="box-body"> 
        
        <form method="post" name="form6" action="">
            <div class="form-group">    
                <table> 
                    <tr>
                        <td class="text-aqua">#</td>
                        <td class="text-aqua">Identificacion</td>
                        <td class="text-aqua">Tipo</td>
                        <td class="text-aqua">Nombre</td>
                        <td class="text-aqua">Apellido</td>
                        <td class="text-aqua">Celular</td>
                        <td class="text-aqua">Usuario</td>
                        <td class="text-aqua">Correo</td>
                        <td class="text-aqua">Contraseña</td>
                        <td class="text-aqua">Foto</td>
                        <td class="text-aqua">Modificar</td>
                        <td class="text-aqua">Eliminar</td>
                        <td class="text-aqua">Visualiar</td>
                        
                        <td><a href="ingresar.php" class="button registro">Registrar</a></td>
                    </tr>

                    <?php
                        $q=0;
                        $query = "SELECT * FROM usuario,tipo_usu where id_usu=$_SESSION[id] and usuario.id_tipo_usu= tipo_usu.id_tipo_usu";

                        $sql = mysqli_query($database,$query);
                        while($resul=mysqli_fetch_array($sql))
                            {
                                $id=            $resul[0];
                                $nombre=        $resul[2];
                                $apellido=      $resul[3];
                                $celular=       $resul[4];
                                $usuario=       $resul[5];
                                $correo=        $resul[6];
                                $contraseña=    $resul[7];
                                $foto=          $resul[8];
                                $tipo=          $resul[10];
                                $q++;
                    ?>
                    <tr>
                        <td><?php echo $q?></td>
          				<td><?php echo $id?></td>
                        <td><?php echo $tipo?></td>
          				<td><?php echo $nombre?></td>
                        <td><?php echo $apellido?></td>
                        <td><?php echo $celular?></td>
                        <td><?php echo $usuario?></td>
                        <td><?php echo $correo?></td>
                        <td><?php echo $contraseña?></td>

                        <td><?php echo (' <img src="foto/'.$foto.'" width="100"> ') ?></td>
                        <td><a href='#' class="button">Modificar</a></td>
                        <td><a href="#" class="button green">Eliminar</a></td>
                        <td><a href='#' class="button red">Ver</a></td>
                    </tr>
                    <?php 
                        }
                    ?>
                </table>
            </div>
        </form>
</body>
</html>