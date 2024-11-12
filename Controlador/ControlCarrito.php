<?php

require_once "../Modelo/DTOProducto.php";
require_once "../Modelo/DAOProducto.php";

session_start();

if(!isset($_SESSION["carrito"])){
    $_SESSION["carrito"] = [];
}

function agregarProductoCarrito($id) {
    $miDao = new DAOProducto();
    $producto = $miDao->buscarPorId($id);
    $carrito = $_SESSION["carrito"];

    foreach ($carrito as $obj) {
        if ($obj->getId() == $producto->getId()) {
            echo "Ya está añadido al carrito";
            return; // Si el producto ya está en el carrito, salimos de la funcion, no se ejecuta el resto del código.
        }
    }

    array_push($carrito, $producto);
    echo "Producto añadido al carrito";

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
    }

function vaciarCarrito(){
   $_SESSION["carrito"] = [];
}

function eliminarProductoCarrito($nombre){
    $miDao = new DAOProducto();
    $producto = $miDao->buscarPorNombre($nombre);
    $carrito = $_SESSION["carrito"];

    foreach ($carrito as $indice => $obj) {
        if ($obj->getNombre() == $producto->getNombre()) {
            unset($carrito[$indice]);
        }
    }

    $_SESSION["carrito"] = $carrito;
}
?>
