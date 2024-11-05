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

    public function buscarNicknameContrasena($nickname, $password) {
        $stmt = $this->conn->prepare("SELECT id, nombre, apellido, nickname, password, telefono, domicilio FROM Cliente WHERE nickname=:nickname");
        $stmt->bindParam(":nickname", $nickname);
        $stmt->execute();

        $result = $stmt->fetch();

        if ($result) {
            if ($password === $result['password']) {
                return new DTOCliente(
                    $result['id'],
                    $result['nombre'],
                    $result['apellido'],
                    $result['nickname'],
                    $result['password'],
                    $result['telefono'],
                    $result['domicilio']
                );
            }else{
                return false;
            }
        }
        return false;
    }


}
?>
