<?php
require "../Controlador/PeticionesClienteInicio.php";

if(!isset($_SESSION["carrito"])){
    $_SESSION["carrito"] = [];
}

class ControlCarrito{

    private $conn;

    public function __construct(){
        $this->conn = DB::getConnection();
    }

    public function agregarProductoCarrito($id){
        $cliente = $_SESSION['cliente'];
        $sql2 = $this->conn->prepare("SELECT id, nombre, descripcion, precio, cliente_id FROM producto WHERE id=$id");
        $sql2->execute();
        $resultado = $sql2->fetchAll();
        foreach($resultado as $fila){
            $producto = new DTOProducto($fila["id"], $fila["nombre"], $fila["descripcion"], $fila["precio"], $fila["cliente_id"]);
        }


        $_SESSION["carrito"][] = $producto;
        $sql = $this->conn->prepare("UPDATE Producto SET cliente_id=:cliente_id WHERE idProducto=:idProducto");
        $sql->bindParam(":idProducto", $producto->getIdProducto());
        $sql->bindParam(":cliente_id", $cliente->getIdCliente());
        return $sql->execute();

    }

    public function mostrarCarrito(){
        $cliente = $_SESSION['cliente'];
        echo "<table>";
        foreach($_SESSION["carrito"] as $producto){
            if($producto->getClienteId() == $cliente->getIdCliente()){
                echo "<tr>";
                echo "<td>".$producto->getNombre()."</td>";
                echo "<td>".$producto->getDescripcion()."</td>";
                echo "<td>".$producto->getPrecio()."</td>";
                echo "<td>".$producto->getCantidad()."</td>";
                echo "</tr>";
            }
        }
        echo "</table>";
    }
}

?>
