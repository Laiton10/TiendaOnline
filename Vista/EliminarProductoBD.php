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
</head>
<body>
<header><h1>Eliminar producto</h1></header>
<form action="../Controlador/PeticionesProducto.php" method="POST">
    <p>Elimina el producto por su ID: </p>
    <label for="id">ID: <input id="id" name="id" placeholder="ID"></label>
    <?php if(isset($_REQUEST["avisoID"])) echo "<p style='color:red;'>".$_REQUEST["avisoID"]."</p>"; ?>
    <br><br>

    <button type="submit" value="delete" name="accion">Eliminar</button>
</form>
</body>
</html>

