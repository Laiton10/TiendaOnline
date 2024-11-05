<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once '../Modelo/DTOCliente.php';
require "../Controlador/PeticionesClienteInicio.php";
session_start();
print $_SESSION["cliente"]->mostrarInfo()."<br>";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    <header><h1>menu</h1></header>
</body>
</html>
