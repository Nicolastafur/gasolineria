<?php
    require_once("./conections/conection.php");
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/registrarse.css"> 
    <title>Registro</title>
</head>

<body>

    <h4>Registrarse</h4>
    <div class="datos" id="contenido">
        <div>
            <img src="" alt="">
        </div>

        <div>
            <p><strong>Identificacion:</strong></p>
            <p><strong>Tipo: </strong></p> 
            <p><strong>Nombre: </strong></p>
            <p><strong>Apellido: </strong></p>
            <p><strong>Celular: </strong></p>
            <p><strong>Usuario: </strong></p>
            <p><strong>Correo: </strong></p> 
            <p><strong>Contraseña: </strong></p> 
        </div>
        
    </div>
    <form  method="POST" autocomplete="off">
    <section class="form-register">
        <div class="imagen">
        <img src="./imagenes/usuario.jpg">
        </div>
        <div class="imagen2">
        <img src="./imagenes/logo gasolineria.png">
        </div>
        <h4> Registro </h4>

        <label for="username">Indentificacion de Usuario: 
            <input class="contols" type="number" name="id_usu" placeholder="Indentificacion">
        </label>

        <label for="username">Tipo: 
            <input class="contols" type="number" name="id_tipo_usu" placeholder="Numero de tipo">
        </label>

        <label for="username">Nombre: 
            <input class="contols" type="text" name="nom_usu" placeholder="Nombre">
        </label>
        
        <label for="celular">Apellido: 
            <input class="contols" type="text" name="ape_usu" placeholder="Apellido">
        </label> 

        <label for="celular">Celular: 
            <input class="contols" type="number" name="cel_usu" placeholder="Celular">
        </label> 

        <label for="celular">Nombre usuario: 
            <input class="contols" type="text" name="usuario" placeholder="Usuario">
        </label> 

        <label for="celular">Email: 
            <input class="contols" type="email" name="email" placeholder="Email">
        </label>

        <label for="celular">Contraseña: 
            <input class="contols" type="password" name="contraseña" placeholder="Contraseña">
        </label>

        <label for="">foto<br>
            <input type="file" name="foto" id=""><br>
        </label>
        <div id="submit">
            <input class="boton" type="submit" value="Enviar">
            <input type="hidden" value="formreg" name="MM_insert"></input>
        </div>

    </section>    
    </form>
    

</body>
</html>