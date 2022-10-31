<?php
    require_once ("../conections/conection.php");
    session_start()
?>

<?php
    if($_GET['buscar']== ""){
        echo"<script>alert('existen datos vacios')</script>";
        echo'<script>window.location="./usuario.php"</script>';
    }

    elseif ($buscar = $_GET['buscar']){
        
        $sql=("SELECT * FROM usuario,tipo_usu WHERE id_usu=".$_GET["buscar"]." AND usuario.id_tipo_usu= tipo_usu.id_tipo_usu");
        $total=mysqli_query($mysql,$sql);
        $visualizar=mysqli_fetch_assoc($total);
         
        if ($visualizar){

            $id=        $visualizar['id_usu'];
            $tipo=      $visualizar['tipo'];
            $nombre=    $visualizar['nom_usu'];
            $apellido=  $visualizar['ape_usu'];
            $celular=   $visualizar['cel_usu'];
            $usuario=   $visualizar['usuario'];
            $correo=    $visualizar['email'];

        }

        else{
            echo"<script>alert('este documento no existe')</script>";
            echo'<script>window.location="./usuario.php"</script>';
        }
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/mostrar_ser.css">
    <title>Buscar</title>
</head>
<body>
    <table>
        <tr>

            <th >Id de Usuario</th>
        
            <th>Nombre</th>
        
            <th>Celular</th>

            <th>Correo</th>


        </tr>
        <tr>
            <td><input type=»text» readonly=»readonly» name="id" placeholder="<?php echo $id?>"/></h1>

            <td><input type=»text» readonly=»readonly» name="nombre"  placeholder="<?php echo $nombre?>"/></h1>
        
            <td><input type=»text» readonly=»readonly» name="celular" placeholder="<?php echo $celular?>"/></h1>

            <td><input type=»text» readonly=»readonly» name="correo"  placeholder="<?php echo $correo?>"/></h1>

        </tr>

    </table>              
</body>
</html>