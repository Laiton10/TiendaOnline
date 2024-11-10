<?php

require_once "../Modelo/DTOProducto.php";
require_once "../Controlador/PeticionesClienteInicio.php";

session_start();
class ControlCarrito{

    private $conn;

    public function __construct(){
        $this->conn = DB::getConnection();

        if (!isset($_SESSION["carrito"])) {
            $_SESSION["carrito"] = [];
            $_SESSION["carrito"][] = new DTOProducto(1, "altavozzzz", "altavoz", 100.00, 1);
        }
    }

    public function agregarProductoCarrito($id){
        $cliente = $_SESSION['cliente'];
        $sql2 = $this->conn->prepare("SELECT id, nombre, descripcion, precio, cliente_id FROM producto WHERE id=:id");
        $sql2->bindParam(":id", $id);
        $sql2->execute();
        $resultado = $sql2->fetchAll();

        foreach($resultado as $fila){
            $producto = new DTOProducto($fila["id"], $fila["nombre"], $fila["descripcion"], $fila["precio"], $fila["cliente_id"]);
        }


        $_SESSION["carrito"][] = $producto;
        $sql = $this->conn->prepare("UPDATE Producto SET cliente_id=:cliente_id WHERE idProducto=:idProducto");
        $sql->bindParam(":idProducto", $id);
        $sql->bindParam(":cliente_id", $cliente->getId());
        return $sql->execute();

    }

    public function mostrarCarrito(){
        if(!empty($_SESSION["carrito"])){
            foreach ($_SESSION["carrito"] as $producto) {
                echo $producto->mostrarInfo() . "<br>";
            }
            }else{
                echo "No hay productos en el carrito";
            }
//        $cliente = $_SESSION['cliente'];
//        echo "<table>";
//        foreach($_SESSION["carrito"] as $producto){
//            print_r($producto);
//            var_dump($producto);
//            if($producto->getClienteId() == $cliente->getId()){
//                echo "<tr>";
//                echo "<td>".$producto->getNombre()."</td>";
//                echo "<td>".$producto->getDescripcion()."</td>";
//                echo "<td>".$producto->getPrecio()."</td>";
//                echo "<td>".$producto->getCantidad()."</td>";
//                echo "</tr>";
//            }
//        }
//        echo "</table>";

        //echo "No hay productos en el carrito";
    }
}

?>
