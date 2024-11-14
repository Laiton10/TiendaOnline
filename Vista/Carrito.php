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
<header><h1>Tienda Online</h1></header>
<hr>
    <nav>
        <ul>
            <li><a href='index.php'>Página Principal</a></li>
            <li><a href='menu.php'>Menú</a></li>
        </ul>
    </nav>
    <?php
        mostrarCarrito();
    ?>
<div class="navCarrito">
    <form action="../Controlador/PeticionesCarrito.php" method="post">
    <div class="container-carrito">
    <p><a href="AnadirProductoAlCarrito.php">Añadir producto al carrito</a></p>
    <button type="submit" name="boton" id="boton" value="eliminar">Vaciar Carrito</button>
    <p><a href="EliminarProductoCarrito.php" >Eliminar producto del carrito</a></p>
    </div>
</div>
    <main>
    </main>
    </form>
    <footer>------------- Tienda Online -------------</footer>
</body>
</html>
