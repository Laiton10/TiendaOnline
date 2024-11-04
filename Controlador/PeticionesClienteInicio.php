<?php
require '../Modelo/DAOCliente.php';

$cliente = new DAOCliente();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nickname = $_POST['nickname'];
    $password = $_POST['password'];

    if($cliente->buscarNicknameContrasena($nickname, $password) == false){
        $aviso = "El usuario o la contrasena son incorrectos";
        header("location:../Vista/iniciarSesion.php?aviso=$aviso");
        exit();
    }else{

        header("location:../Vista/menu.php");
    }





    header("location:../Vista/menu.php");
}
?>
