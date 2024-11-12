<?php
require_once "../Modelo/DTOProducto.php";
session_start();
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
    <header><h1>Eliminar producto del carrito</h1></header><br><br>
    <?php
    echo "<table style='border-collapse: collapse; width: 100%;'>";
    echo "<tr style='border: 1px solid black; background-color: #f2f2f2;'>";
    echo "<th style='border: 1px solid black; padding: 8px;'>ID</th>";
    echo "<th style='border: 1px solid black; padding: 8px;'>Nombre</th>";
    echo "<th style='border: 1px solid black; padding: 8px;'>Descripción</th>";
    echo "<th style='border: 1px solid black; padding: 8px;'>Precio</th>";
    echo "<th style='border: 1px solid black; padding: 8px;'>Eliminar productos</th>";
    echo "</tr>";

    foreach($_SESSION["carrito"] as $producto){
        echo "<tr style='border: 1px solid black;'>";
        echo "<td style='border: 1px solid black; padding: 8px;'>". $producto->getId()."</td>";
        echo "<td style='border: 1px solid black; padding: 8px;'>". $producto->getNombre() . "</td>";
        echo "<td style='border: 1px solid black; padding: 8px;'>" . $producto->getDescripcion() . "</td>";
        echo "<td style='border: 1px solid black; padding: 8px;'>" . $producto->getPrecio() . "</td>";
        echo "<td style='border: 1px solid black; padding: 8px;'>" . "<button type='submit' name='boton' value='" . $producto->getNombre() . "'>Eliminar</button>" . "</td>";
        echo "</tr>";
    }
    echo "</table><br><br>";
    ?>

    <p><a href="Carrito.php">Volver al carrito</a></p>
</form>
</body>
</html>