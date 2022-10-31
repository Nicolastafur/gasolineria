<?php

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "gasolineria";

    $mysql = new mysqli($hostname, $username, $password, $database);


    if ($mysql -> connect_errno) {

        die("Fallo de conexion" . mysqli_connect_errno());
    }

?>