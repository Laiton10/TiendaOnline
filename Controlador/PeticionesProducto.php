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
     if(empty($_POST["descripcion"])){
         $avisoDescripcion= "No se ha introducido la descripcion";
     }else{
         $descripcion = $_POST["descripcion"];
     }
       if(empty($_POST["precio"])){
           $avisoPrecio= "No se ha introducido el precio";
       }else{
           $precio = $_POST["precio"];
       }
        $clienteid = null;

       if(!empty($avisoID) || !empty($avisoNombre) || !empty($avisoDescripcion) || !empty($avisoPrecio)){
           header("Location:../Vista/AñadirProductoBD.php?avisoID=$avisoID&avisoNombre=$nombre&avisoDescripcion=$descripcion&avisoPrecio=$precio");
       }

        $nuevoProducto = new DTOProducto($id, $nombre, $descripcion, $precio, $clienteid);
        $productoDAO->insertProducto($nuevoProducto);


    } else if ($boton == "delete") {
        if(empty($_POST["id"])){
            $avisoID= "No se ha introducido el id";
        }else{
            $id = $_POST["id"];
        }

        if(!empty($avisoID)){
            header("Location:../Vista/EliminarProductoBD.php?id=$avisoID");
        }

        $productoDAO->deleteProducto($id);
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
        if(empty($_POST["descripcion"])){
            $avisoDescripcion= "No se ha introducido la descripcion";
        }else{
            $descripcion = $_POST["descripcion"];
        }
        if(empty($_POST["precio"])){
            $avisoPrecio= "No se ha introducido el precio";
        }else{
            $precio = $_POST["precio"];
        }

        if(!empty($avisoID)|| !empty($avisoNombre) || !empty($avisoDescripcion) || !empty($avisoPrecio)){
            header("Location:../Vista/ActualizarProductoBD.php?avisoId=$avisoID&avisoNombre=$nombre&avisoDescripcion=$descripcion&avisoPrecio=$precio");
        }
        $productoDAO->editarProducto($id, $nombre, $descripcion, $precio);
    }
    header("Location:../Vista/menu.php");
}
?>

