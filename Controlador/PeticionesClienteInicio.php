<?php
require_once '../Modelo/DTOCliente.php';
require_once '../Controlador/ControlRegistro.php';

$cliente = new ControlRegistro();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nickname = $_POST['nickname'];
    $password = $_POST['password'];

    $clienteUsuario = $cliente->buscarCliente($nickname, $password);

    if(is_string($clienteUsuario)){
        $error = $clienteUsuario;
        header("location:../Vista/iniciarSesion.php?aviso=$error");

    }else{
        header("location:../Vista/index.php");
    }

}
?>
