<?php
require_once 'ControlCarrito.php';

$controlCarrito = new ControlCarrito();

$boton = $_POST["boton"];

if($boton == "anadir"){
    $id = $_POST["id"];
    $controlCarrito->agregarProductoCarrito($id);
}
?>
