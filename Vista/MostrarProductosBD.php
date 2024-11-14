<?php
require "../Controlador/PeticionesClienteInicio.php";
$cliente= $_SESSION['cliente'];
print($cliente->__mostrarInfo() . "<br><br>");
require_once "../Controlador/ControlProducto.php";
$producto= new ControlProducto();
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
<br>
<nav>
    <ul>
        <li><a href='menu.php'>Menú</a></li>
    </ul>
</nav>
<br>
<h2>Productos:</h2>
<main class="mainAnadir">
<?php
echo "<table style='border-collapse: collapse; width: 100%;'>";
echo "<tr style='border: 1px solid black; background-color: #f2f2f2;'>";
echo "<th style='border: 1px solid black; padding: 8px;'>ID</th>";
echo "<th style='border: 1px solid black; padding: 8px;'>Nombre</th>";
echo "<th style='border: 1px solid black; padding: 8px;'>Descripción</th>";
echo "<th style='border: 1px solid black; padding: 8px;'>Precio</th>";
echo "<th style='border: 1px solid black; padding: 8px;'>Cliente ID</th>";
echo "</tr>";

foreach($producto->mostrarProductos() as $row) {
    echo "<tr style='border: 1px solid black;'>";
    echo "<td style='border: 1px solid black; padding: 8px;'>". $row["id"]."</td>";
    echo "<td style='border: 1px solid black; padding: 8px;'>". $row["nombre"] . "</td>";
    echo "<td style='border: 1px solid black; padding: 8px;'>" . $row["descripcion"] . "</td>";
    echo "<td style='border: 1px solid black; padding: 8px;'>" . $row["precio"] . "</td>";
    echo "<td style='border: 1px solid black; padding: 8px;'>" . $row["cliente_id"] . "</td>";
    echo "</tr>";
}
echo "</table>";

?>
</main>
<footer class="footerAnadir">------------- Tienda Online -------------</footer>
</body>
</html>




