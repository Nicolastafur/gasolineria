<?php
    session_start();
    

    unset($_SESSION['nom_usu']);
    unset($_SESSION['id_usu']);
    $_SESSION = array();
    session_destroy();
    session_write_close();
    header("Location: ../index.php")
?>