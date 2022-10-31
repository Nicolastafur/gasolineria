<?php
    require_once ("../conections/conection.php");
    session_start()
?>
<?php
    if($_GET['buscar']== ""){
        echo"<script>alert('datos vacios')</script>";
        echo'<script>window.location="./tipo_usu.php"</script>';
    }
    elseif ($buscar = $_GET['buscar']){
        
        $sql=("SELECT * FROM tipo_usu WHERE id_tipo_usu=".$_GET["buscar"]."");
        $total=mysqli_query($mysql,$sql);
        $visualizar=mysqli_fetch_assoc($total);
         
        if ($visualizar){

            $id=        $visualizar['id_tipo_usu'];
            $nombre=    $visualizar['tipo'];
            $precio=    $visualizar['salario'];
            

        }
        else{
            echo"<script>alert('este usuario no existe')</script>";
            echo'<script>window.location="./tipo_usu.php"</script>';

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
    <title>Tipo de usuarios</title>
</head>
<body>
    <table class="tabla">
        <tr>
                
            <th>Identificacion</th>
            
            <th>Tipo</th>

            <th>Salario</th>

        </tr>
        <tr>
            <td><input type=»text» readonly=»readonly» name="id" placeholder="<?php echo $id?>"/></td>

            <td><input type=»text» readonly=»readonly» name="nombre" placeholder="<?php echo $nombre?>"/></td>

            <td><input type=»text» readonly=»readonly» name="salario"  placeholder="<?php echo $precio?>"/></td>

        </tr>

    </table>              
</body>
</html>