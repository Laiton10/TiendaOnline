<?php

require_once "../Modelo/DTOProducto.php";
require_once "../Modelo/DAOProducto.php";

session_start();

if(!isset($_SESSION["carrito"])){
    $_SESSION["carrito"] = [];
}

    function agregarProductoCarrito($id){
        $miDao = new DAOProducto();
        $producto = $miDao->buscarPorId($id);
        $carrito = $_SESSION["carrito"];
        array_push($carrito, $producto);
        $_SESSION["carrito"] = $carrito;
    }

    function mostrarCarrito(){
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


?>
