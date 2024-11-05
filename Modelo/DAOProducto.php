<?php
require_once 'DB.php';
require_once 'DTOProducto.php';
class DAOProducto{
    private $conn;
    public function __construct(){
        $this->conn= DB::getConnection();
    }
    public function insertProducto($producto) {
        $stmt = $this->conn->prepare("INSERT INTO Producto(id, nombre, descripcion, precio, cliente_id) VALUES(:id, :nombre, :descripcion, :precio, :cliente_id)");

        $id = $producto->getId();
        $nombre = $producto->getNombre();
        $descripcion = $producto->getDescripcion();
        $precio = $producto->getPrecio();
        $cliente_id = $producto->getClienteId();

        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":nombre", $nombre);
        $stmt->bindParam(":descripcion", $descripcion);
        $stmt->bindParam(":precio", $precio);
        $stmt->bindParam(":cliente_id", $cliente_id);

        return $stmt->execute();
    }
}
?>
