<?php
    require_once("./conections/conection.php");
?>

<?php
    if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"]=="formreg")) 
    {
        $id_veh=            $_POST['id_veh'];
        $nom_veh=           $_POST['nom_veh'];
        $precio_veh=        $_POST['precio_veh'];
        
        $validar ="SELECT * FROM tipo_veh WHERE id_veh='$id_veh'";
        $query=mysqli_query($mysql, $validar);
        $fila=mysqli_fetch_assoc($query);

        if ($fila) {
            echo'<script>alert("DOCUMENTO O USUARIO YA EXISTEN")</script>';
            echo'<script>windows.location="index.php"</script>';
        }

        else if ( $id_veh == "" || $nom_veh == "" || $precio_veh)
        {
            echo'<script> alert ("existen datos vacios");</script>';
            echo'<script> windows.location="index.php";</script>';
        }
    
        else
        {
            $registrarme= "INSERT INTO tipo_veh (id_veh, nom_veh, precio_veh ) VALUES ('$id_veh', '$nom_veh', '$precio_veh')";
            mysqli_query($mysql,$registrarme);
            echo'<script> alert ("registro exitoso, gracias por su tiempo");</script>';
            echo'<script> windows.location="index.php";</script>';
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/tipo_veh.css">
    <title>tipo de usuario</title>
</head>

<body>
    <div id="formulario">

        <div id="mitad">
            <img src="./imagenes/vehiculos.jpg">
        </div>

        <div class="registro">

            <div id="logotipo">
                <img src="./imagenes/logo gasolineria.png">
            </div>

            <div id="login">

                <form method="post" name="formreg" autocomplete="off">
                    <h2><label for="usuario">Tipo de Vehiculo</label></h2><br><br>

                    <section id="registro">
                        <h1>Identificacion del Vehiculo:</h1><br>
                        <input type="number" name="id_veh" id="name" placeholder="ingrese el id"><br><br>
                        <h1>Nombre del Vehiculo:</h1><br>
                        <input type="text" name="nom_veh" id="name" placeholder="ingrese el nombre"><br><br>
                        <h1>Precio del Vehiculo:</h1><br>
                        <input type="number" name="precio_veh" id="name" placeholder="ingrese el precio"><br><br>
                        
                        <div id="submit">
                            
                            <input type="submit" value="ingreso" name="validar">
                            <input type="hidden" value="formreg" name="MM_insert">
                        </div>
                        
                        <div class="olvido">
                            <a href="./Administrador/index.php">Volver</a>
                        </div>

                    </section>

                </form>
            </div>

        </div>


    </div>
</body>

</html>