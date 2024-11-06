<?php
require_once "../Modelo/DB.php";
require_once "../Modelo/DAOProducto.php";
require_once "../Modelo/DTOProducto.php";
$productoDAO = new DAOProducto();

$boton = $_POST["accion"];
if ($boton == "insert") {
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];
    $precio = $_POST["precio"];
    $clienteid = null;

    $nuevoProducto= new DTOProducto($id,$nombre,$descripcion,$precio,$clienteid);

    $productoDAO->insertProducto($nuevoProducto);

}else if($boton == "delete"){
    $id = $_POST["id"];
    $productoDAO->deleteProducto($id);
}else if($boton == "actualizar"){
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];
    $precio = $_POST["precio"];
    $productoDAO->editarProducto($id,$nombre,$descripcion,$precio);
}
?>

