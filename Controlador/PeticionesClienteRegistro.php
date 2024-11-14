<?php
require_once "../Controlador/ControlRegistro.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST["id"]) &&  isset($_POST["nombre"]) &&  isset($_POST["apellido"]) && isset($_POST["nickname"]) && isset($_POST["password"]) && isset($_POST["telefono"]) && isset($_POST["domicilio"])){

        $controlRegistro = new ControlRegistro();
        $resultado = $controlRegistro->registrarCliente($_POST["id"], $_POST["nombre"], $_POST["apellido"], $_POST["nickname"], $_POST["password"], $_POST["telefono"], $_POST["domicilio"]);

        if ($resultado === true) {
            header("Location: ../Vista/iniciarSesion.php");
            exit();
        } else {
            $avisoID = $resultado['id'] ?? '';
            $avisoNombre = $resultado['nombre'] ?? '';
            $avisoNickname = $resultado['nickname'] ?? '';
            $avisoPassword = $resultado['password'] ?? '';
            $avisoTelefono = $resultado['telefono'] ?? '';

            header("Location: ../Vista/registroCliente.php?avisoID=$avisoID&avisoNombre=$avisoNombre&avisoNickname=$avisoNickname&avisoPassword=$avisoPassword&avisoTelefono=$avisoTelefono");
            exit();
        }
    }
}
?>

