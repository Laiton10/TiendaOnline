<?php
require_once "../Modelo/DTOCliente.php";
require_once "../Modelo/DAOProducto.php";
$miDao = new DAOProducto();
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Página Principal</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>

<?php
if(isset($_SESSION["cliente"])){
    echo "<p>Bienvenido " . $_SESSION["cliente"]->getNombre() . "</p>";
    echo "<header><h1>TIENDA ONLINE</h1></header>
                  <hr>
                  <nav>
                     <ul>
                        <li><a href='menu.php'>Menú</a></li>
                        <li><a href='Carrito.php'>Carrito</a></li>
                    </ul>
                  </nav>";


    echo "<main>";

    echo "<table style='border-collapse: collapse; width: 100%;'>";
    echo "<tr style='border: 1px solid black; background-color: #f2f2f2;'>";
    echo "<th style='border: 1px solid black; padding: 8px;'>ID</th>";
    echo "<th style='border: 1px solid black; padding: 8px;'>Nombre</th>";
    echo "<th style='border: 1px solid black; padding: 8px;'>Descripción</th>";
    echo "<th style='border: 1px solid black; padding: 8px;'>Precio</th>";
    echo "</tr>";

    foreach($miDao->mostrarProductosNulos() as $producto){
        echo "<tr style='border: 1px solid black;'>";
        echo "<td style='border: 1px solid black; padding: 8px;'>". $producto["id"]."</td>";
        echo "<td style='border: 1px solid black; padding: 8px;'><a href='VistaProducto.php?idProducto=" . $producto['id'] . "'>" . $producto['nombre'] . "</a></td>";
        echo "<td style='border: 1px solid black; padding: 8px;'>" . $producto["descripcion"] . "</td>";
        echo "<td style='border: 1px solid black; padding: 8px;'>" . $producto["precio"] . "</td>";
        echo "</tr>";
    }
    echo "</table><br><br>";

    echo "</main>";

    echo "<footer>------------- Tienda Online -------------</footer>";
}else{
    echo "<p><a href='iniciarSesion.php'>Iniciar sesión</a></p>";
    echo "<header><h1>TIENDA ONLINE</h1></header>
                  <hr>
                  <nav>
                     <ul>
                        <li><a href='iniciarSesion.php'>Menu</a></li>
                        <li><a href='iniciarSesion.php'>Carrito</a></li>
                    </ul>
                  </nav>";


    echo "<main>";

    echo "<table style='border-collapse: collapse; width: 100%;'>";
    echo "<tr style='border: 1px solid black; background-color: #f2f2f2;'>";
    echo "<th style='border: 1px solid black; padding: 8px;'>ID</th>";
    echo "<th style='border: 1px solid black; padding: 8px;'>Nombre</th>";
    echo "<th style='border: 1px solid black; padding: 8px;'>Descripción</th>";
    echo "<th style='border: 1px solid black; padding: 8px;'>Precio</th>";
    echo "</tr>";

    foreach($miDao->mostrarProductosNulos() as $producto){
        echo "<tr style='border: 1px solid black;'>";
        echo "<td style='border: 1px solid black; padding: 8px;'>". $producto["id"]."</td>";
        echo "<td style='border: 1px solid black; padding: 8px;'>". $producto["nombre"] . "</td>";
        echo "<td style='border: 1px solid black; padding: 8px;'>" . $producto["descripcion"] . "</td>";
        echo "<td style='border: 1px solid black; padding: 8px;'>" . $producto["precio"] . "</td>";
        echo "</tr>";
    }
    echo "</table><br><br>";

    echo "</main>";

    echo "<footer>------------- Tienda Online -------------</footer>";
}
?>
</body>
</html>