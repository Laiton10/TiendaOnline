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
<header><h1>Actualizar producto</h1></header>
<form action="../Controlador/PeticionesProducto.php" method="POST">
    <p>Pon el ID del producto que quieras actualizar</p>
    <label for="id"><input id="id" name="id" placeholder="ID"></label><br><br>
    <p>Valores a actualizar: </p>
    <label for="nombre"><input id="nombre" name="nombre" placeholder="Nombre"></label><br><br>
    <label for="desc"><input id="desc" name="descripcion" placeholder="Descripcion"></label><br><br>
    <label for="precio"><input id="precio" name="precio" placeholder="Precio"></label><br><br>
    <button type="submit" value="actualizar" name="accion">Enviar</button>
</form>
</body>
</html>
