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
    <title>Usuarios</title>
</head>
<body>
    
    <div class="ver">

        <form action="./mostrar_usuario.php" method="GET" name=table autocomplete="off">    <br>
            <input  class = "buscar"  type = "text"  name = "buscar"   id = ""  placeholder = "Buscar">  <a  href = "#"><button  class = "boton"> Buscar </button></a><br><br>

            <table class="tabla">
                <tr>

                    <th >Id de Usuario</th>
                    
                    <th>Nombre</th>

                    <th>Apellido</th>
            
                    <th>Celular</th>
                    
                    <th>Usuario</th>

                    <th>Correo</th>

                    <th>Ver</th>

                    <th>Modificar</th>

                </tr>
                
                <?php

                    $query = "SELECT * FROM usuario WHERE id_usu=$_SESSION[id] ";
                    $usuario=mysqli_query($mysql, $query);
                    
                    
                    while($mostrar=mysqli_fetch_assoc($usuario)){
                ?>
                
                <tr>
                    <td><input type=»text» readonly=»readonly» name="id" placeholder="<?php echo $mostrar ['id_usu']?>"/></td>
                    
                    <td><input type=»text» readonly=»readonly» name="nombre" placeholder="<?php echo $mostrar ['nom_usu']?>"/></td>

                    <td><input type=»text» readonly=»readonly» name="apellido" placeholder="<?php echo $mostrar ['ape_usu']?>"/></td>

                    <td><input type=»text» readonly=»readonly» name="celular" placeholder="<?php echo $mostrar ['cel_usu']?>"/></td>

                    <td><input type=»text» readonly=»readonly» name="usuario" placeholder="<?php echo $mostrar ['usuario']?>"/></td>

                    <td><input type=»text» readonly=»readonly» name="apellido" placeholder="<?php echo $mostrar ['email']?>"/></td>

                    <td>
                        <a href="?accion=id=<?php echo $mostrar['id_usu'] ?>"onclick="window.open('./ver_usuario.php?id=<?php echo $mostrar['id_usu'] ?>','', 'width=1000,heigth=580,toolbar=NO');void(null);" class="button">
                           Ver
                        </a>
                    </td>

                    <td>
                        <a href="?accion=mo=<?php echo $mostrar['id_usu'] ?>"onclick="window.open('./modificar_servicio_administrador.php?mo=<?php echo $mostrar['id_usu'] ?>','', 'width=1000,heigth=580,toolbar=NO');void(null);" class="button">
                            Modificar
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
