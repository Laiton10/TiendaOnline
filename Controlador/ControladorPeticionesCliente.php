<?php
require '../Modelo/DAOCliente.php';

$clienteDAO = new DAOCliente();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST["id"]) &&  isset($_POST["nombre"]) &&  isset($_POST["apellido"]) && isset($_POST["nickname"]) && isset($_POST["password"]) && isset($_POST["telefono"]) && isset($_POST["domicilio"])){

        if(!empty($_POST["id"])){
            $id = $_POST["id"];
        }else{
            $avisoID = "El campo id es obligatorio";
        }

        if(!empty($_POST["nombre"])){
            $nombre = $_POST["nombre"];
        }else{
            $avisoNombre = "El campo nombre es obligatorio";
        }

            $apellido = $_POST["apellido"]; //no debe ser obligatorio

        if(!empty($_POST["nickname"])){
            $nickname = $_POST["nickname"];
        }else{
            $avisoNickname = "El campo nickname es obligatorio";
        }
        if(!empty($_POST["password"])){
            $password = $_POST["password"];
        }else{
            $avisoPassword = "El campo password es obligatorio";
        }

        if(!empty($_POST["telefono"])){
            $telefono = $_POST["telefono"];
        }else{
            $avisoTelefono = "El campo telefono es obligatorio";
        }

        $domicilio = $_POST["domicilio"];

        if (!empty($avisoID) || !empty($avisoNombre) || !empty($avisoNickname) || !empty($avisoPassword) || !empty($avisoTelefono)) {
            header("Location: ../Vista/registroCliente.php?avisoID=$avisoID&avisoNombre=$avisoNombre&avisoNickname=$avisoNickname&avisoPassword=$avisoPassword&avisoTelefono=$avisoTelefono");
        }

        $cliente = new DTOCliente($id,$nombre,$apellido,$nickname,$password,$telefono,$domicilio);

        $clienteDAO->agregarCliente($cliente);
        header("location:../Vista/iniciarSesion.html");
    }
}
?>

