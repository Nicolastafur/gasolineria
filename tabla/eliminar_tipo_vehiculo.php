<?php
    require_once("../conections/conection.php");
?>

<?php

if($_GET['el']){

    $id= $_GET['el'];
    $eliminar="DELETE FROM tipo_veh WHERE id_veh='$id'";
    $borrar=mysqli_query($mysql, $eliminar);

    echo"<script>alert('elminacion exitosa')</script>";
    echo'<script>parent.window.close();</script>';
    
}
?>
