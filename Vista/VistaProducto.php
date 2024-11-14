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
<nav>
    <ul>
        <li><a href='index.php'>Página Principal</a></li>
    </ul>
</nav>
<main class="mainAnadir">
<?php
require_once "../Modelo/DTOProducto.php";
require_once "../Controlador/ControlProducto.php";
$daoProducto = new ControlProducto();
$producto = $daoProducto->buscarPorId($_REQUEST["idProducto"]);

echo "<h2>Vista en detalle del producto</h2><br>";
echo "<p><strong>Nombre:</strong> " . $producto->getNombre() ."</p>";
echo "<p><strong>Precio:</strong> " . $producto->getPrecio() ."</p>";
echo "<p><strong>Descripción:</strong> " . $producto->getDescripcion() ."</p>";
?>
</main>
<footer>------------- Tienda Online -------------</footer>
</body>
</html>
