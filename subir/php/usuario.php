<?php
require_once("../../conections/conection.php");
session_start();

$id=            $_POST['id_usu'];
$tipo=          $_POST['id_tipo_usu'];
$nombre =       $_POST['nom_usu'];
$apellido =     $_POST['ape_usu'];
$celular =      $_POST['cel_usu'];
$usuario=       $_POST['usuario'];
$correo =       $_POST['email'];
$clave =        $_POST['contraseña'];


$foto =     $_FILES['foto'] ['name'];
$ruta =     $_FILES['foto'] ['tmp_name'];
$tamano =   $_FILES['foto'] ['size'];
$ext =      $_FILES['foto'] ['type'];
$destino = "../foto/".$foto;
copy($ruta,$destino);


$insertar = "INSERT INTO usuario (id_usu,id_tipo_usu,nom_usu,ape_usu,cel_usu,usuario,email,contraseña,foto) values ('$id','$tipo','$nombre','$apellido','$celular','$usuario','$correo','$clave','$foto')";
$sql = mysqli_query($mysql,$insertar);
if ($sql) {
    echo ('
        <div id="imagen">
            <img src="foto/'.$foto.'" alt="">
        </div>
        <div id="contenido">
            <p><strong>Identificacion:</strong></p>
            <p><strong>Tipo: </strong></p> 
            <p><strong>Nombre: </strong></p>
            <p><strong>Apellido: </strong></p>
            <p><strong>Celular: </strong></p>
            <p><strong>Usuario: </strong></p>
            <p><strong>Correo: </strong></p> 
            <p><strong>Contraseña: </strong></p> 
            <p><strong>Tamaño: </strong>'.$tamano.'</p> 
            <p><strong>Tipo: </strong>'.$ext.'</p> 

        </div>
        <div>
            <button>Ingresar usuario</button>
        </div>
    
    ');
}else{
    echo 2;
}
?>