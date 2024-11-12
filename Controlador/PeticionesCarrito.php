<?php
require_once 'ControlCarrito.php';
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(is_numeric($_POST["boton"])){
    $id = $_POST['boton'];
    agregarProductoCarrito($id);
}elseif ($_POST["boton"] != "eliminar" && !is_numeric($_POST["boton"])) {
    $nombre = $_POST["boton"];
    eliminarProductoCarrito($nombre);
}elseif ($_POST["boton"] == "eliminar") {
    vaciarCarrito();
}
    header("Location: ../Vista/Carrito.php");


?>
