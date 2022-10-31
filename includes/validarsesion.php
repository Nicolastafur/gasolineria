<?php
    if(!isset($_SESSION['nombre']) || !isset($_SESSION['id']))
    {
        header("Location: ../index.php");
        exit;
    }
?>