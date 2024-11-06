<?php
require "../Controlador/PeticionesClienteInicio.php";
$cliente= $_SESSION['cliente'];
print($cliente->__mostrarInfo());
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eliminar</title>
</head>
<body>
    <header><h1>Eliminar producto</h1></header>
        <form action="../Controlador/PeticionesProducto.php" method="POST">
            <p>Elimina el producto por su id: </p><br>
            <label for="id"><input id="id" name="id" placeholder="ID"></label><br><br>
            <button type="submit" value="delete" name="accion">Eliminar</button>
</form>
</body>
</html>
