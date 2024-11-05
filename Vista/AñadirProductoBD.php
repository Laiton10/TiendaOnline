<?php
require "../Controlador/PeticionesClienteInicio.php";
$cliente= $_SESSION['cliente'];
print($cliente->__mostrarInfo());
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<header><h1>Añadir producto</h1></header>
<form action="../Controlador/PeticionesProducto.php" method="POST">
    <label for="id"><input id="id" name="id" placeholder="ID"></label><br><br>
    <label for="nombre"><input id="nombre" name="nombre" placeholder="Nombre"></label><br><br>
    <label for="desc"><input id="desc" name="descripcion" placeholder="Descripcion"></label><br><br>
    <label for="precio"><input id="precio" name="precio" placeholder="Precio"></label><br><br>
    <button type="submit" value="insert" name="accion">Enviar</button>
</form>
</body>
</html>