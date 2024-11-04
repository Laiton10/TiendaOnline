<?php
require '../Modelo/DAOCliente.php';

$clienteDAO = new DAOCliente();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST["id"]) &&  isset($_POST["nombre"]) &&  isset($_POST["apellido"]) && isset($_POST["nickname"]) && isset($_POST["password"]) && isset($_POST["telefono"]) && isset($_POST["domicilio"])){

        if (empty($_POST["id"])) {
            $avisoID = "El campo id es obligatorio";
        }
        else {
            $id = $_POST["id"];
        }

        if (empty($_POST["nombre"])) {
            $avisoNombre = "El campo nombre es obligatorio";
        }elseif(!ctype_alnum($_POST["nombre"])){
            $avisoNombre = "El campo nombre solo puede tener caracteres alfanumericos";
        }else {
            $nombre = $_POST["nombre"];
        }

        $apellido = $_POST["apellido"];

        if (empty($_POST["nickname"])) {
            $avisoNickname = "El campo nickname es obligatorio";
        } else {
            $nickname = $_POST["nickname"];
        }

        if (empty($_POST["password"])) {
            $avisoPassword = "El campo password es obligatorio";
        } elseif(strlen($_POST["password"]) < 4 || strlen($_POST["password"]) > 10 ){
            $avisoPassword = "La contrasena debe tener entre 4 y 10 caracteres";
        }elseif (!preg_match("/[A-Z]/",$_POST["password"])){ // preg match sirve para realizar una busqueda en una cadena utilizando una expresion regular
            $avisoPassword = "La contrasena debe contener al menos una letra mayuscula";
        }elseif (!preg_match("/[a-z]/",$_POST["password"])){
            $avisoPassword = "La contrasena debe contener al menos una letra minuscula";
        }elseif (!preg_match("/[0-9]/", $_POST["password"])){
            $avisoPassword = "La contrasena debe contener al menos un numero";
        }
        else {
            $password = $_POST["password"];
        }

        if (empty($_POST["telefono"])) {
            $avisoTelefono = "El campo telefono es obligatorio";
        } else {
            $telefono = $_POST["telefono"];
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

