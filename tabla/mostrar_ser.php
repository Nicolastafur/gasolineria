<?php
    require_once ("../conections/conection.php");
    session_start()
?>
<?php
    if($_GET['buscar']== ""){
        echo"<script>alert('datos vacios')</script>";
        echo'<script>window.location="./servicio_administrador.php"</script>';
    }
    elseif ($buscar = $_GET['buscar']){
        
        $sql=("SELECT * FROM servicios WHERE id_ser=".$_GET["buscar"]."");
        $total=mysqli_query($mysql,$sql);
        $visualizar=mysqli_fetch_assoc($total);
         
        if ($visualizar){

            $id=        $visualizar['id_ser'];
            $nombre=    $visualizar['nom_ser'];
            $precio=    $visualizar['precio_ser'];
            

        }
        else{
            echo"<script>alert('este servicio no existe')</script>";
            echo'<script>window.location="./servicio_administrador.php"</script>';

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
    <title>Servicios</title>
</head>
<body>
    <table class="tabla">
        <tr>
                
            <th>Identificacion</th>
            
            <th>Nombre</th>

            <th>Precio</th>

        </tr>
        <tr>
            <td><input type=»text» readonly=»readonly» name="id" placeholder="<?php echo $id?>"/></td>

            <td><input type=»text» readonly=»readonly» name="nombre" placeholder="<?php echo $nombre?>"/></td>

            <td><input type=»text» readonly=»readonly» name="precio"  placeholder="<?php echo $precio?>"/></td>

        </tr>

    </table>              
</body>
</html>