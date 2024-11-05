<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>

<?php
require "../Controlador/PeticionesClienteInicio.php";
$empleado = $_SESSION["cliente"];
print($empleado->__mostrarInfo());
?>

    <header><h1>menu</h1></header>
</body>
</html>
