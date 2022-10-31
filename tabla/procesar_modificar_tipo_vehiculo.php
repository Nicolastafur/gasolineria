<?php
    require_once("../conections/conection.php");
    
    $id=          $_GET['id'];
    $nombre=      $_GET['nombre'];
    $precio=      $_GET['precio'];
    

   
    $actualiar=("UPDATE tipo_veh SET nom_veh='$nombre', precio_veh='$precio' WHERE id_veh='$id'");
    $resultado=mysqli_query($mysql, $actualiar);

    echo '<script>alert("se han guardado los cambios correctamente,actualize la pagina para ver los cambios");</script>';
    echo'<script>parent.window.close();</script>';

?>

