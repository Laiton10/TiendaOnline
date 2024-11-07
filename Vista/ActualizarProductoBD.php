<?php
require "../Controlador/PeticionesClienteInicio.php";
$cliente = $_SESSION['cliente'];
print($cliente->__mostrarInfo());
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Actualizar producto</title>
</head>
<body>
<header><h1>Actualizar producto</h1></header>
<form action="../Controlador/PeticionesProducto.php" method="POST">
    <p>Pon el ID del producto que quieras actualizar</p>
    <label for="id">ID: <input id="id" name="id" placeholder="ID"></label>
    <?php if(isset($_REQUEST["avisoID"])) echo "<p style='color:red;'>".$_REQUEST["avisoID"]."</p>"; ?>
    <br><br>

    <p>Valores a actualizar: </p>
    <label for="nombre">Nombre: <input id="nombre" name="nombre" placeholder="Nombre"></label>
    <?php if(isset($_REQUEST["avisoNombre"])) echo "<p style='color:red;'>".$_REQUEST["avisoNombre"]."</p>"; ?>
    <br><br>

    <label for="desc">Descripcion: <input id="desc" name="descripcion" placeholder="Descripcion"></label>
    <?php if(isset($_REQUEST["avisoDescripcion"])) echo "<p style='color:red;'>".$_REQUEST["avisoDescripcion"]."</p>"; ?>
    <br><br>

    <label for="precio">Precio: <input id="precio" name="precio" placeholder="Precio"></label>
    <?php if(isset($_REQUEST["avisoPrecio"])) echo "<p style='color:red;'>".$_REQUEST["avisoPrecio"]."</p>"; ?>
    <br><br>

    <button type="submit" value="actualizar" name="accion">Enviar</button>
</form>
</body>
</html>

