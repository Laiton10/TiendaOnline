<?php
require_once "../Modelo/DAOCliente.php";

$cliente = new DAOCliente();

if($_POST["cerrar"]){
    $cliente->cerrarSesion();
    header("location: ../Vista/iniciarSesion.php");
}

?>
