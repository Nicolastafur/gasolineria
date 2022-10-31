<?php
    require_once("./conections/conection.php");
?>

<?php
    if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"]=="formreg"))
    {
        $id=            $_POST['id_ser'];
        $nombre =       $_POST['nom_ser'];
        $precio=        $_POST['precio_ser'];


        $validar = "SELECT * FROM servicios WHERE id_ser='$id'";
        $query1=mysqli_query($mysql, $validar);
        $fila1=mysqli_fetch_assoc($query1);

        if ($fila1) {
            echo'<script>alert("id O tipo YA EXISTEN")</script>';
            echo'<script>windows.location="index.php"</script>';
        }

        else if ($id == "" || $nombre == "" || $precio == "")
        {
            echo'<script> alert ("existen datos vacios");</script>';
            echo'<script> windows.location="index.php";</script>';
        }
    
        else
        {
            $registrarme= "INSERT INTO servicios (id_ser, nom_ser ,precio_ser) VALUES ('$id','$nombre', '$precio')";
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
    <link rel="stylesheet" href="./css/servicios.css">
    <title>servicios</title>
</head>

<body>
    <div id="formulario">

        <div id="mitad">
            <img src="./imagenes/servicios.png">
        </div>

        <div class="registro">

            <div id="logotipo">
                <img src="./imagenes/Captura.PNG">
            </div>

            <div id="login">

                <form method="post" name="formreg"   autocomplete="off">
                    <h2><label for="usuario">Servicios</label></h2><br><br>

                    <section id="registro">

                        <h1>Que servicio desea:</h1><br>
                        <input type="number" name="id_ser" placeholder="Ingrese id"><br><br>
                        <h1>Nombre del servicio:</h1><br>
                        <input type="text" name="nom_ser" placeholder="Ingrese el nombre"><br><br>
                        <h1>Precio del servicio:</h1><br>
                        <input type="number" name="precio_ser" placeholder="Ingrese el precio"><br><br>
                        

                        <div id="submit">
                            
                            <input type="submit" value="ingresar" name="validar">
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