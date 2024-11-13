<?php

require_once "../Controlador/ControlCarrito.php";
require_once "../Modelo/DTOCliente.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$datosSerializados = serialize($_SESSION["cliente"]);
$obj = unserialize($datosSerializados);
echo "<p class='bienvenido'> Bienvenido " . $obj->getNombre() . "</p> <br>";


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link rel="stylesheet" href="paginas.css">
</head>
<body>
    <header><h2>Carrito</h2></header>
    <?php
        mostrarCarrito();
    ?>
<nav>
    <form action="../Controlador/PeticionesCarrito.php" method="post">
    <div class="container-carrito">
    <p><a href="AnadirProductoAlCarrito.php">Añadir producto al carrito</a></p>
    <button type="submit" name="boton" id="boton" value="eliminar">Vaciar Carrito</button>
    <p><a href="EliminarProductoCarrito.php" >Eliminar producto del carrito</a></p>
    </div>
</nav>
    <main>
    <h2 class="h2Carrito"><a href="menu.php">Menu principal</a></h2>
    </main>
    </form>
    <footer>------------- Tienda Online -------------</footer>
</body>
</html>
