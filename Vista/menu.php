<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>

<?php
require "../Controlador/PeticionesClienteInicio.php";
$empleado = $_SESSION["cliente"];
print($empleado->__mostrarInfo());
?>
    <header><h1>Menú</h1></header>
    <ul>
        <p><b>Menú carrito:</b></p>
        <li><a href="">Añadir producto al carrito</a></li>
        <li><a href="">Eliminar producto del carrito</a></li>
        <li><a href="">Mostrar carrito</a></li>
        <li><a href="">Eliminar todos los productos</a></li>
    </ul>
    <ul>
        <p><b>Menu BD:</b></p>
        <li><a href="">Añadir producto</a></li>
        <li><a href="">Eliminar prodcuto</a></li>
        <li><a href="">Mostrar productos</a></li>
        <li><a href="">Editar producto</a></li>
    </ul>

</body>
</html>