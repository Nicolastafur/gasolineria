<?php
    require_once("../conections/conection.php");
    
    $id=          $_GET['id'];
    $tipo=        $_GET['tipo'];
    $salario=     $_GET['salario'];
    

   
    $actualiar=("UPDATE tipo_usu SET tipo='$tipo', salario='$salario' WHERE id_tipo_usu='$id'");
    $resultado=mysqli_query($mysql, $actualiar);

    echo '<script>alert("se han guardado los cambios correctamente,actualize la pagina para ver los cambios");</script>';
    echo'<script>parent.window.close();</script>';

?>

