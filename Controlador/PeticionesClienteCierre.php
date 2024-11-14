<?php
require_once "../Controlador/ControlRegistro.php";

$cliente = new ControlRegistro();

if($_POST["cerrar"]){
    $cliente->cerrarSesion();
    header("location: ../Vista/iniciarSesion.php");
}

?>
