<?php
    require_once("../conections/conection.php");
    
    $id=          $_GET['id'];
    $nombre=      $_GET['nombre'];
    $precio=      $_GET['precio'];
    

   
    $actualiar=("UPDATE servicios SET nom_ser='$nombre', precio_ser='$precio' WHERE id_ser='$id'");
    $resultado=mysqli_query($mysql, $actualiar);

    echo '<script>alert("se han guardado los cambios correctamente,actualize la pagina para ver los cambios");</script>';
    echo'<script>parent.window.close();</script>';

?>

