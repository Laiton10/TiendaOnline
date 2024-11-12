<?php
require "../Controlador/PeticionesClienteInicio.php";
$cliente= $_SESSION['cliente'];
print($cliente->__mostrarInfo() . "<br><br>");
require_once "../Modelo/DAOProducto.php";
$producto= new DAOProducto();

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




