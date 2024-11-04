<?php
require_once 'DB.php';
require_once 'DTOCliente.php';

class DAOCliente {
    private $conn;

    public function __construct(){
        $this->conn = DB::getConnection();
    }

    public function agregarCliente($cliente){
        $stmt = $this->conn->prepare("INSERT INTO Cliente(id,nombre,apellido,nickname,password,telefono,domicilio) VALUES (:id, :nombre, :apellido, :nickname, :password, :telefono, :domicilio)");
        $stmt->bindParam(":id", $cliente->getId());
        $stmt->bindParam(":nombre", $cliente->getNombre());
        $stmt->bindParam(":apellido", $cliente->getApellido());
        $stmt->bindParam(":nickname", $cliente->getNickname());
        $stmt->bindParam(":password", $cliente->getPassword());
        $stmt->bindParam(":telefono", $cliente->getTelefono());
        $stmt->bindParam(":domicilio", $cliente->getDomicilio());

        return $stmt->execute();
    }
}
?>
