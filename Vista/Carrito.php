<?php
require '../Controlador/ControlCarrito.php';
$carrito = new ControlCarrito();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    <header><h2>Carrito</h2></header>
    <?php
        $carrito->mostrarCarrito();
    ?>

    <p><a href="">Añadir producto al carrito</a></p>
    <p><a href="">Vaciar carrito</a></p>
    <p><a href= >Eliminar producto del carrito</a></p>

    <h2><a href="menu.php">Menu principal</a></h2>
</body>
</html>
