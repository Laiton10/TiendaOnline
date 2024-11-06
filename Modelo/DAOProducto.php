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

        echo "<table style='border-collapse: collapse; width: 100%;'>";
        echo "<tr style='border: 1px solid black; background-color: #f2f2f2;'>";
        echo "<th style='border: 1px solid black; padding: 8px;'>ID</th>";
        echo "<th style='border: 1px solid black; padding: 8px;'>Nombre</th>";
        echo "<th style='border: 1px solid black; padding: 8px;'>Descripción</th>";
        echo "<th style='border: 1px solid black; padding: 8px;'>Precio</th>";
        echo "<th style='border: 1px solid black; padding: 8px;'>Cliente ID</th>";
        echo "</tr>";

        foreach($result as $row) {
            echo "<tr style='border: 1px solid black;'>";
            echo "<td style='border: 1px solid black; padding: 8px;'>". $row["id"]."</td>";
            echo "<td style='border: 1px solid black; padding: 8px;'>". $row["nombre"] . "</td>";
            echo "<td style='border: 1px solid black; padding: 8px;'>" . $row["descripcion"] . "</td>";
            echo "<td style='border: 1px solid black; padding: 8px;'>" . $row["precio"] . "</td>";
            echo "<td style='border: 1px solid black; padding: 8px;'>" . $row["cliente_id"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }

    public function editarProducto($id, $nombre, $descripcion, $precio){
        $stmt = $this->conn->prepare("UPDATE Producto SET nombre=:nombre, descripcion=:descripcion, precio=:precio WHERE id = :id ");
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":nombre", $nombre);
        $stmt->bindParam(":descripcion", $descripcion);
        $stmt->bindParam(":precio", $precio);
        return $stmt->execute();
    }

}
?>
