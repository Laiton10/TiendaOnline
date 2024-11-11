<?php
require_once 'ControlCarrito.php';
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//var_dump($_SESSION);  // Muestra la sesión para depuración

$boton = $_POST["boton"];

if($boton == "anadir"){
    $id = $_POST["idProducto"];

    agregarProductoCarrito($id);
    header("location: ../Vista/Carrito.php");
}
?>
