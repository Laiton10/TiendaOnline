<?php
require_once "../Modelo/DB.php";
require_once "../Modelo/DAOProducto.php";
require_once "../Modelo/DTOProducto.php";
$productoDAO = new DAOProducto();

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $boton = $_POST["accion"];

    if ($boton == "insert") {
        if(empty($_POST["id"])){
            $avisoID= "No se ha introducido el id";
        }else{
            $id = $_POST["id"];
        }
     if(empty($_POST["nombre"])){
         $avisoNombre= "No se ha introducido el nombre";
     }else if(!ctype_alnum($_POST["nombre"])){
         $avisoNombre= "El nombre solo acepta letras y numeros";
     }else{
         $nombre = $_POST["nombre"];
     }
        if(empty($_POST["descripcion"])) {
            $avisoDescripcion = "No se ha introducido la descripcion";
        } elseif(!preg_match('/^[a-zA-Z0-9 ]+$/', $_POST["descripcion"])) {
            $avisoDescripcion = "La descripcion solo puede contener letras, numeros y espacios";
        } else {
            $descripcion = $_POST["descripcion"];
        }
        if(empty($_POST["precio"])){
            $avisoPrecio= "No se ha introducido el precio";
        }else if($_POST["precio"] < 0){
            $avisoPrecio= "El precio debe ser positivo";
        }
        else{
            $precio = $_POST["precio"];
        }
        $clienteid = null;

       if(!empty($avisoID) || !empty($avisoNombre) || !empty($avisoDescripcion) || !empty($avisoPrecio)){
           header("Location:../Vista/AnadirProductoBD.php?avisoID=$avisoID&avisoNombre=$avisoNombre&avisoDescripcion=$avisoDescripcion&avisoPrecio=$avisoPrecio");
       }

        $nuevoProducto = new DTOProducto($id, $nombre, $descripcion, $precio, $clienteid);
        $productoDAO->insertProducto($nuevoProducto);
        header("Location:../Vista/menu.php");


    } else if ($boton == "delete") {
        if(empty($_POST["id"])){
            $avisoID= "No se ha introducido el id";
        }else{
            $id = $_POST["id"];
        }

        if(!empty($avisoID)){
            header("Location:../Vista/EliminarProductoBD.php?avisoID=$avisoID");
            exit();
        }

        $productoDAO->deleteProducto($id);
        header("Location:../Vista/menu.php");
        exit();

    } else if ($boton == "actualizar") {
        if(empty($_POST["id"])){
            $avisoID= "No se ha introducido el id";
        }else{
            $id = $_POST["id"];
        }
        if(empty($_POST["nombre"])){
            $avisoNombre= "No se ha introducido el nombre";
        }else if(!ctype_alnum($_POST["nombre"])){
            $avisoNombre= "El nombre solo acepta letras";
        }
        else{
            $nombre = $_POST["nombre"];
        }
        if(empty($_POST["descripcion"])) {
            $avisoDescripcion = "No se ha introducido la descripcion";
        } elseif(!preg_match('/^[a-zA-Z0-9 ]+$/', $_POST["descripcion"])) {
            $avisoDescripcion = "La descripcion solo puede contener letras, numeros y espacios";
        } else {
            $descripcion = $_POST["descripcion"];
        }
        if(empty($_POST["precio"])){
            $avisoPrecio= "No se ha introducido el precio";
        }else if($_POST["precio"] < 0){
            $avisoPrecio= "El precio debe ser positivo";
        }
        else{
            $precio = $_POST["precio"];
        }

        if(!empty($avisoID)|| !empty($avisoNombre) || !empty($avisoDescripcion) || !empty($avisoPrecio)){
            header("Location:../Vista/ActualizarProductoBD.php?avisoID=$avisoID&avisoNombre=$avisoNombre&avisoDescripcion=$avisoDescripcion&avisoPrecio=$avisoPrecio");
            exit();
        }
        $productoDAO->editarProducto($id, $nombre, $descripcion, $precio);

        header("Location:../Vista/menu.php");
        exit();
    }

}
?>

