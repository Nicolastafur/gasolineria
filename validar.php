<?php

require_once ("../uno/conections/conection.php");
session_start();

if ((isset($_GET["MM_update"])) && ($_GET["MM_update"] =="form1"))
{
    $contra =       $_GET['cont'];

    if ($_GET['cont']== "" || $_GET['conta'] == "" )
    {
        echo'<script> alert ("Datos vacios, no ingreso la clave");</script>';
        echo  '<script>window.location="./recordar.html"</script>';
    }

    else
    {
        $cel =  $_SESSION['documento'];

        $insertSQL = "UPDATE usuario SET contraseña='$contra' WHERE  id_usu = '$cel'";
        mysqli_query($mysql, $insertSQL);

        echo'<script> alert ("Cambio la Clave Exitosamente");</script>';
        echo  '<script>window.location="./index.php"</script>';


    }
}
?>

<?php
if ($_GET["validar"]) 
{      
    $doc =          $_GET["id_usu"];
    $correo=        $_GET["email"];
    $cel =          $_GET['cel_usu'];
    

    $validar="SELECT * FROM usuario WHERE id_usu='$doc' and email='$correo' and  cel_usu='$cel'";
    $usuario=mysqli_query($mysql,$validar);
    $fila=mysqli_fetch_assoc ($usuario);

    if($fila)
    {
        $_SESSION['documento'] =           $fila['id_usu'];
 
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/recordar.css">
    <title>gasolineria 123</title>
</head>

<body >
    <div id="formulario">

        <div id="mitad">
            <img src="./imagenes/cambio.png">
        </div>

        <div class="registro">

            <div id="logotipo">
                <img src="./imagenes/logo gasolineria.png">
            </div>

            <div id="login">

                <form method="get" name="form1" action="validar.php" autocomplete="on">
                    <h2><label for="usuario">Cambio de contraseña</label></h2><br><br>

                    <section id="registro">

                        <h1><label> Cambio de contraseña:</label></h1><br>
                        <input type="password" name="cont" id="cel" placeholder="Ingrese el Nuevo Celular"><br><br>
                        <h1><label> Confirme contraseña:</label></h1><br>
                        <input type="password" name="conta" id="cel" placeholder="Confirme el Nuevo Celular"><br><br>


                        <div id="submit">
                            <input type="submit" value="confirmar" name="confirmar">
                            <input type="hidden" name="MM_update" value="form1">

                        </div>
                       

                    </section>
                </form>
            </div>

        </div>


    </div>
</body>

</html>

    <?php
    }
    else
    {
        echo '<script>alert ("El usuario, celular Y Documento  no existen en la base de datos, Verfica bien todo por favor ");</script>';
        echo '<script>window.location="./index.php"</script>';
    }
}
?>