<?php
require_once "../Controlador/ControlProducto.php";

$controlProducto = new ControlProducto();

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $boton = $_POST["accion"];

    if ($boton == "insert") {
        $result = $controlProducto->crearProducto($_POST["id"], $_POST["nombre"], $_POST["descripcion"], $_POST["precio"]);

        if ($result !== true) {
            $avisoID = $result['id'] ?? ''; //si aviso ID es nulo o no existe se asigna el valor de la derecha y si no el valor de la izquierda
            $avisoNombre = $result['nombre'] ?? '';
            $avisoDescripcion = $result['descripcion'] ?? '';
            $avisoPrecio = $result['precio'] ?? '';
            header("Location:../Vista/AnadirProductoBD.php?avisoID=$avisoID&avisoNombre=$avisoNombre&avisoDescripcion=$avisoDescripcion&avisoPrecio=$avisoPrecio");
        }  else {
            header("Location:../Vista/menu.php");
        }
    } elseif ($boton == "delete") {
        $result = $controlProducto->eliminarProducto($_POST["id"]);

        if ($result !== true) {
            $avisoID = $result['id'] ?? '';
            header("Location:../Vista/EliminarProductoBD.php?avisoID=$avisoID");
        } else {
            header("Location:../Vista/menu.php");
        }
    } elseif ($boton == "actualizar") {
        $result = $controlProducto->actualizarProducto($_POST["id"], $_POST["nombre"], $_POST["descripcion"], $_POST["precio"]);

        if ($result !== true) {
            $avisoID = $result['id'] ?? '';
            $avisoNombre = $result['nombre'] ?? '';
            $avisoDescripcion = $result['descripcion'] ?? '';
            $avisoPrecio = $result['precio'] ?? '';
            header("Location:../Vista/ActualizarProductoBD.php?avisoID=$avisoID&avisoNombre=$avisoNombre&avisoDescripcion=$avisoDescripcion&avisoPrecio=$avisoPrecio");
        } else {
            header("Location:../Vista/menu.php");
        }
    }
}

?>

