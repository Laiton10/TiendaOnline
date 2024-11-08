<?php

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
<form action="../Controlador/PeticionesCarrito.php" method="post">
    <header>Añadir producto al carrito</header>
    <label for="idProducto">ID producto<input type="number" name="idProducto" id="idProducto"></label>
    <button type="submit" name="anadir">Enviar</button>
</form>
</body>
</html>
