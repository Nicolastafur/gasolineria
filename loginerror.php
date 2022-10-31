<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <title>gasolineria 123</title>
</head>

<body >
    <div id="formulario">

        <div id="mitad">
            <img src="./imagenes/descarga.jpg">
        </div>

        <div class="registro">

            <div id="logotipo">
                <img src="./imagenes/logo gasolineria.png">
            </div>

            <div id="login">

                <form method="post" name="formreg" action="includes/inicio.php" autocomplete="on">
                    <h2><label for="usuario">Error vuelve e inicie sesion </label></h2><br><br>

                    <section id="registro">

                        <h1><label> Nombre:</label></h1><br>
                        <input type="text" name="nom_usu" id="name" placeholder=" Ingrese su nombre "><br><br>
                        <h1><label> celular:</label></h1><br>
                        <input type="number" name="cel_usu" id="name" placeholder=" Ingrese su celular"><br><br>
                        <h1><label> Indentificacion:</label></h1><br>
                        <input type="password" name="id_usu" id="name" placeholder=" Ingrese su id "><br><br>
                        
                        <div id="submit">
                            <input type="submit" value="ingresar" name="ingresar">
                            <input type="hidden" value="formreg" name="MM_insert">
                        
                        </div>  
                        
                        <div id="olvido">
                            <a href="recordar.html"> Olvidaste tu contraseña </a>
                        </div>
                        

                        <div class="sign-up">
                            <a href="Registrarse.php">Quiere registrarse </a>
                        </div>
                        </div>  
                        
                    </section>
                </form>
            </div>

        </div>


    </div>
</body>
</html>