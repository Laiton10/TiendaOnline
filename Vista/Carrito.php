<?php

require_once "../Controlador/ControlCarrito.php";
require_once "../Modelo/DTOCliente.php";

session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$datosSerializados = serialize($_SESSION["cliente"]);
$obj = unserialize($datosSerializados);
echo "Bienvenido " . $obj->getNombre() . "<br>";


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
        mostrarCarrito();
    ?>

    <p><a href="">Añadir producto al carrito</a></p>
    <p><a href="">Vaciar carrito</a></p>
    <p><a href= >Eliminar producto del carrito</a></p>

    <h2><a href="menu.php">Menu principal</a></h2>
</body>
</html>
