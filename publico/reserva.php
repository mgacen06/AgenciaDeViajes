<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../publico/fontawesome/css/all.css">
    <link rel="stylesheet" href="./css/navYFooter.css">
    <link rel="shortcut icon" href="img/icono.ico" type="" id="icono">
    <title>Reserva</title>
</head>
<body>
    <nav id="elNav"></nav>
    <main class="caja" id="cartAu">
        <h1>Reserva</h1>
        <div class="cart">
            <h2>Apartamento de 2 dormitorios, ApartaHotel, Zamzíbar</h2>
            <h3 id="total">Total: $0</h2>
            <div class="formReserva">
                <form action="" method="" class="formReserva1">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required><br><br>
                    <label for="fecha_entrada" >Fecha de entrada:</label>
                    <input type="date" id="fecha_entrada" name="fecha_entrada" required><br><br>
                    <label for="fecha_salida">Fecha de salida:</label>
                    <input type="date" id="fecha_salida" name="fecha_salida" required><br><br>
                    <label for="cantidad_personas">Cantidad de personas:</label>
                    <input type="number" id="cantidad_personas" name="cantidad_personas" min="1" required><br><br>
                </form>
                <div class="lineaVer"> </div>
                <form action="" method="" class="formReserva1">
                    <label for="">Método de pago:</label>
                        <select id="metodo_pago" name="metodo_pago" required>
                            <option value="paypal">PayPal</option>
                            <option value="tarjeta_credito">Tarjeta de crédito</option>
                            <option value="paypal">PayPal</option>
                            <option value="transferencia_bancaria">Transferencia bancaria</option>
                        </select><br><br>
                    <label for="tarjeta_credito">Tarjeta de crédito:</label>
                    <input type="text" id="tarjeta_credito" name="tarjeta_credito" required><br><br>
                    <label for="cvv">CVV:</label>
                    <input type="text" id="cvv" name="cvv" required><br><br>
                    <button class="btn" type="submit" value="Reservar">Pagar</button>
                </form>
            </div>
        
            
        </div>
    </main>
    <footer>
    <div class="redesSociales">
        <a class="redes" href="https://www.instagram.com/mgacen06/"><i id="botontw" class="fab fa-instagram"></i>Instagram</a>
        <a class="redes" href="https://twitter.com"><i id="botontw" class="fab fa-twitter"></i>Twitter</a>
    </div>
    <div class="infoFooter">
        <br>
        <small>Copyright © 2022 Empresa de ofertas de alojamientos. Todos los derechos reservados. C/ Bernardino Obregón 25, 28012. Madrid, España</small>
    </div>
    </footer>
</body>
<script src="navYFooter.js"></script>
</html>