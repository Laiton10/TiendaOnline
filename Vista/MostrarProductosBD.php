<?php
require "../Controlador/PeticionesClienteInicio.php";
$cliente= $_SESSION['cliente'];
print($cliente->__mostrarInfo() . "<br><br>");
require_once "../Modelo/DAOProducto.php";
$producto= new DAOProducto();
$producto->mostrarProductos();
?>





