<?php
require_once '../Modelo/DTOCliente.php';
require_once '../Modelo/DAOCliente.php';


session_start();

//var_dump($_SESSION);

$cliente = new DAOCliente();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nickname = $_POST['nickname'];
    $password = $_POST['password'];

    $clienteUsuario = $cliente->buscarNicknameContrasena($nickname, $password);

    if($clienteUsuario == false){
        $aviso = "El usuario o la contrasena son incorrectos";
        header("location:../Vista/iniciarSesion.php?aviso=$aviso");
    }else{
        $_SESSION["cliente"] = $clienteUsuario;
        header("location:../Vista/menu.php");
    }

}
?>
