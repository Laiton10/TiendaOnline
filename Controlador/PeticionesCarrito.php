<?php
require_once 'ControlCarrito.php';
session_start();

var_dump($_SESSION);  // Muestra la sesión para depuración

if (!isset($_SESSION['cliente'])) {
    echo "Cliente no autenticado, redirigiendo al login...";
    header("Location: ../Vista/iniciarSesion.php");
    exit();
}

$controlCarrito = new ControlCarrito();

$boton = $_POST["boton"];

if($boton == "anadir"){
    $id = $_POST["idProducto"];
    $controlCarrito->agregarProductoCarrito($id);
//    header("location: Carrito.php");
//    exit();
}
?>
