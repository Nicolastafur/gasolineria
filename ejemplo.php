<?php
    require_once("./conections/conection.php");
    session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <title>Factura</title>
    <div>
        <script>
            var idCliente;
            var nombreCliente;
            var telefonoCliente;
            var emailCliente
            var $fila1;
            var precio;
            var cantidad;
            var trabajador;
            var placa;
            var vehiculo;
            var total;
            var subtotal;
            var p = 0;
            var iva;
            var subtotalP = 0;
            var fecha = new Date();
            var hora = new Date();
            var imprimir;
            var numero_Factura = 0;


            function generarFactura() {


                idCliente = document.getElementById("idCliente").value;
                nombreCliente = document.getElementById("nombreCliente").value;
                telefonoCliente = document.getElementById("telefonoCliente").value;
                emailCliente = document.getElementById("emailCliente").value;

                document.write(fecha.getDate() + "/" + (fecha.getMonth() + 1) + "/" + fecha.getFullYear() + "</br>" + "</br>" + "</br>");
                document.write(hora.getHours() + ":" + (hora.getMinutes() + 1) + ":" + hora.getSeconds() + "</br>" + "</br>" + "</br>");
                document.write("Identificacion del Cliente:" + '&nbsp;' + idCliente + "<br>" + "<br>");
                document.write("Nombre del Cliente:" + '&nbsp;' + nombreCliente + "<br>" + "<br>");
                document.write("Telefono:" + '&nbsp;' + telefonoCliente + "<br>" + "<br>" + "<br>");
                document.write("Email:" + '&nbsp;' + emailCliente + "<br>" + "<br>" + "<br>");


                for (subtotal = 0; $fila1 != "listo"; subtotal++) {


                    $fila1 = prompt('Ingrese Nombre del Servicio');
                    document.write("Nombre del Servicio:  " + '&nbsp;' + $fila1 + '&nbsp;' + '&nbsp;');
                    

                    precio = parseFloat(prompt('Ingrese Precio a Pagar'));
                    document.write("Precio:  " + '&nbsp;' + precio + '&nbsp;' + '&nbsp;');


                    cantidad = parseInt(prompt('Ingrese Cantidad que Desea'));
                    document.write("Cantidad:  " + '&nbsp;' + cantidad + '&nbsp;' + '&nbsp;');

                    trabajador = prompt('Ingrese el Nombre de quien le brindo el Servicio');
                    document.write("Nombre del Empleado:  " + '&nbsp;' + trabajador + '&nbsp;' + '&nbsp;');

                    vehiculo = prompt('Ingrese el Tipo de Vehiculo');
                    document.write("Nombre del Vehiculo:  " + '&nbsp;' + vehiculo + '&nbsp;' + '&nbsp;');

                    placa = prompt('Ingrese su placa');
                    document.write("Identificacion de PLaca:  " + '&nbsp;' + placa + '&nbsp;' + '&nbsp;');

                    nombreservicio = prompt('Ingrese "listo" Para terminar o cualquier tecla para continuar');

                    subtotal = precio * cantidad;
                    subtotalP = subtotalP + parseInt(subtotal);
                    iva = subtotalP * 0.19;
                    total = subtotalP + iva;


                    document.write("SubTotal :" + '&nbsp;' + subtotal + "<br>" + "<br>" + "<br>");


                }

                document.write("Subtotal : " + '&nbsp;' + subtotalP + "<br>" + "<br>");
                document.write("Iva 19% :" + '&nbsp;' + iva + "<br>" + "<br>");
                document.write("Total :" + '&nbsp;' + total + "<br>" + "<br>");
                document.write('<button onclick="window.print()">Imprimir Factura</button>');

            }

            generarFactura()
        </script>
    </div>

</head>

<body>
    <div id="formulario">

        <div id="mitad">
            <img src="./imagenes/factura.png">
        </div>

        <div class="registro">

            <div id="logotipo">
                <img src="./imagenes/factura1.png">
            </div>

            <div id="login">

                <form method="post" name="formreg" autocomplete="off">
                    <h2><label for="usuario">Factura</label></h2><br><br>

                    <section id="registro">

                        <h1><label> Numero Id :</label></h1><br>
                        <input type="text" name="idCliente" id="idCliente" placeholder="idCliente" /><br><br>

                        <h1><label> Nombre Cliente :</label></h1><br>
                        <input type="text" name="nombreCliente" id="nombreCliente" placeholder="Nombre" /><br><br>

                        <h1><label> Celular:</label></h1><br>
                        <input type="text" name="telefonoCliente" id="telefonoCliente" placeholder="Celular" /><br><br>

                        <h1><label> Email:</label></h1><br>
                        <input type="text" name="emailCliente" id="emailCliente" placeholder="Email" /><br><br>

                        <div id="submit">
                            <input type="button" name="Continuar" onclick="generarFactura()" value="Continuar" />
                            <input type="hidden" value="formreg" name="MM_insert">

                        </div>

                    </section>
                </form>
            </div>

        </div>


    </div>
</body>

</html>