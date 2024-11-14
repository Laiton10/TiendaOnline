<?php
require_once "../Modelo/DAOProducto.php";
$producto = new DAOProducto();
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
<form action="../Controlador/PeticionesCarrito.php" method="post">
        <header><h1>Tienda Online</h1></header>
    <nav class="navAnadir">
        <ul>
            <li><a href='menu.php'>Menú</a></li>
            <li><a href='Carrito.php'>Carrito</a></li>
        </ul>
    </nav>
    <h2>Añadir producto al carrito</h2>
    <main>
    <?php
    echo "<table style='border-collapse: collapse; width: 100%;'>";
    echo "<tr style='border: 1px solid black; background-color: #f2f2f2;'>";
    echo "<th style='border: 1px solid black; padding: 8px;'>ID</th>";
    echo "<th style='border: 1px solid black; padding: 8px;'>Nombre</th>";
    echo "<th style='border: 1px solid black; padding: 8px;'>Descripción</th>";
    echo "<th style='border: 1px solid black; padding: 8px;'>Precio</th>";
    echo "<th style='border: 1px solid black; padding: 8px;'>Cliente ID</th>";
    echo "<th style='border: 1px solid black; padding: 8px;'>Añadir productos</th>";
    echo "</tr>";

    foreach($producto->mostrarProductosNulos() as $producto){
        echo "<tr style='border: 1px solid black;'>";
        echo "<td style='border: 1px solid black; padding: 8px;'>". $producto["id"]."</td>";
        echo "<td style='border: 1px solid black; padding: 8px;'>". $producto["nombre"] . "</td>";
        echo "<td style='border: 1px solid black; padding: 8px;'>" . $producto["descripcion"] . "</td>";
        echo "<td style='border: 1px solid black; padding: 8px;'>" . $producto["precio"] . "</td>";
        echo "<td style='border: 1px solid black; padding: 8px;'>" . $producto["cliente_id"] . "</td>";
        echo "<td style='border: 1px solid black; padding: 8px;'>" . "<button type='submit' name='boton' value='" . $producto['id'] . "'>Añadir</button>" . "</td>";
        echo "</tr>";
    }
    echo "</table><br><br>";
    ?>

</main>
        <footer>------------- Tienda Online -------------</footer>
</form>
</body>
</html>
