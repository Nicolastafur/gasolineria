<?php
    require_once("./conections/conection.php");
?>

<?php
    if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"]=="formreg")) 
    {
        $id=               $_POST['id'];
        $tipo=             $_POST['tipo'];
        $salario=          $_POST['salario'];
        
        $validar ="SELECT * FROM tipo_usu WHERE id_tipo_usu='$id'";
        $query=mysqli_query($mysql, $validar);
        $fila=mysqli_fetch_assoc($query);

        if ($fila) {
            echo'<script>alert("DOCUMENTO O USUARIO YA EXISTEN")</script>';
            echo'<script>windows.location="index.php"</script>';
        }

        else if ( $id == "" || $tipo == "" || $salario =="")
        {
            echo'<script> alert ("existen datos vacios");</script>';
            echo'<script> windows.location="index.php";</script>';
        }
    
        else
        {
            $registrarme= "INSERT INTO tipo_usu (id_tipo_usu, tipo, salario) VALUES ('$id', '$tipo', '$salario')";
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
    <link rel="stylesheet" href="./css/tipo_usu.css">
    <title>tipo de usuario</title>
</head>

<body>
    <div id="formulario">

        <div id="mitad">
            <img src="./imagenes/tipo_usu.png">
        </div>

        <div class="registro">

            <div id="logotipo">
                <img src="./imagenes/Captura.PNG">
            </div>

            <div id="login">

                <form method="post" name="formreg" autocomplete="off">
                    <h2><label for="usuario">Tipo de Usuario</label></h2><br><br>

                    <section id="registro">
                        <h1>Identificacion:</h1><br>
                        <input type="number" name="id" id="name" placeholder="ingrese su id"><br><br>
                        <h1>Cargo:</h1><br>
                        <input type="text" name="tipo" id="name" placeholder="ingrese el nombre"><br><br>
                        <h1>Salario:</h1><br>
                        <input type="text" name="salario" id="name" placeholder="ingrese el salario"><br><br>
                        
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