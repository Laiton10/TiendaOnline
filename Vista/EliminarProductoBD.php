<?php
require "../Controlador/PeticionesClienteInicio.php";
$cliente = $_SESSION['cliente'];
print($cliente->__mostrarInfo());
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Eliminar producto</title>
    <link rel="stylesheet" href="paginas.css">
</head>
<body>
<header><h1>Tienda Online</h1></header>
<nav>
    <ul>
        <li><a href='menu.php'>Menú</a></li>
    </ul>
</nav>
<h2>Eliminar producto</h2>
<main class="mainEliminar">
<form action="../Controlador/PeticionesProducto.php" method="POST">
    <p>Elimina el producto por su ID: </p>
    <label for="id">ID: <input id="id" name="id" placeholder="ID"></label>
    <?php if(isset($_REQUEST["avisoID"])) echo "<p style='color:red;'>".$_REQUEST["avisoID"]."</p>"; ?>
    <br><br>

    <button type="submit" value="delete" name="accion">Eliminar</button><br><br>
</main>
<footer class="footerAnadir">------------- Tienda Online -------------</footer>
</form>
</body>
</html>

