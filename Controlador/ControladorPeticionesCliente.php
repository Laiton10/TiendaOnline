<?php
require '../Modelo/DAOCliente.php';

$clienteDAO = new DAOCliente();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST["id"]) &&  isset($_POST["nombre"]) &&  isset($_POST["apellido"]) && isset($_POST["nickname"]) && isset($_POST["password"]) && isset($_POST["telefono"]) && isset($_POST["domicilio"])){

        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $nickname = $_POST["nickname"];
        $password = $_POST["password"];
        $telefono = $_POST["telefono"];
        $domicilio = $_POST["domicilio"];

        $cliente = new DTOCliente($id,$nombre,$apellido,$nickname,$password,$telefono,$domicilio);

        $clienteDAO->agregarCliente($cliente);
        header("location:../Vista/iniciarSesion.html");
    }
}
?>

