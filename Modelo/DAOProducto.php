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

    public function deleteProducto($id){
        $stmt = $this->conn->prepare("DELETE FROM Producto WHERE id = :id");
        $stmt->bindParam(":id", $id);
        return $stmt->execute();
    }

    public function mostrarProductos(){
        $stmt = $this->conn->prepare("SELECT * FROM Producto");
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    public function editarProducto($id, $nombre, $descripcion, $precio){
        $stmt = $this->conn->prepare("UPDATE Producto SET nombre=:nombre, descripcion=:descripcion, precio=:precio WHERE id = :id ");
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":nombre", $nombre);
        $stmt->bindParam(":descripcion", $descripcion);
        $stmt->bindParam(":precio", $precio);
        return $stmt->execute();
    }

    public function buscarNombre($nombre){
        $stmt= $this->conn->prepare("SELECT nombre FROM Producto WHERE nombre LIKE :nombre");
        $stmt->bindParam(":nombre", $nombre);
        $stmt->execute();
        $result = $stmt->fetchAll();
        if($result){
            return true;
        }else{
            return false;
        }
    }

    public function buscarPorId($id){
        $stmt= $this->conn->prepare("SELECT id, nombre, descripcion, precio, cliente_id FROM Producto WHERE id =:id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $result = $stmt->fetchAll();
        if($result){
           foreach($result as $fila){
               return new DTOProducto($fila["id"], $fila["nombre"], $fila["descripcion"], $fila["precio"], $fila["cliente_id"]);
           }
        }else{
            return false;
        }
        return false;
    }

}
?>
