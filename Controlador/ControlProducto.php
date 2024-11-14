<?php
require_once "../Modelo/DAOProducto.php";
require_once "../Modelo/DTOProducto.php";

class ControlProducto {
    private $productoDAO;

    public function __construct() {
        $this->productoDAO = new DAOProducto();
    }

    public function crearProducto($id, $nombre, $descripcion, $precio) {
        $errores = [];

        if (empty($id)) {
            $errores['id'] = "No se ha introducido el id";
        }

        if (empty($nombre)) {
            $errores['nombre'] = "No se ha introducido el nombre";
        } elseif (!ctype_alnum($nombre)) {
            $errores['nombre'] = "El nombre solo acepta letras y numeros";
        } elseif ($this->productoDAO->buscarNombre($nombre)) {
            $errores['nombre'] = "El producto ya se encuentra en la base de datos";
        }

        if (empty($descripcion)) {
            $errores['descripcion'] = "No se ha introducido la descripcion";
        } elseif (!preg_match('/^[a-zA-Z0-9 ]+$/', $descripcion)) {
            $errores['descripcion'] = "La descripcion solo puede contener letras, numeros y espacios";
        }

        if (empty($precio)) {
            $errores['precio'] = "No se ha introducido el precio";
        } elseif ($precio < 0) {
            $errores['precio'] = "El precio debe ser positivo";
        }

        if (!empty($errores)) {
            return $errores;
        }

        $nuevaDescripcion = $descripcion;
        if ($precio < 10) {
            $nuevaDescripcion .= " || 'Producto de oferta'";
        } elseif ($precio > 200) {
            $nuevaDescripcion .= " || 'Producto de calidad'";
        }

        $nuevoProducto = new DTOProducto($id, $nombre, $nuevaDescripcion, $precio, null);
        $this->productoDAO->insertProducto($nuevoProducto);

        return true;
    }

    public function eliminarProducto($id) {
        if (empty($id)) {
            $errores["id"] = "No se ha introducido el id";
        }

        if (!empty($errores)) {
            return $errores;
        }

        $this->productoDAO->deleteProducto($id);
        return true;
    }

    public function actualizarProducto($id, $nombre, $descripcion, $precio) {
        $errores = [];

        if (empty($id)) {
            $errores['id'] = "No se ha introducido el id";
        }

        if (empty($nombre)) {
            $errores['nombre'] = "No se ha introducido el nombre";
        } elseif (!ctype_alnum($nombre)) {
            $errores['nombre'] = "El nombre solo acepta letras y numeros";
        }

        if (empty($descripcion)) {
            $errores['descripcion'] = "No se ha introducido la descripcion";
        } elseif (!preg_match('/^[a-zA-Z0-9 ]+$/', $descripcion)) {
            $errores['descripcion'] = "La descripcion solo puede contener letras, numeros y espacios";
        }

        if (empty($precio)) {
            $errores['precio'] = "No se ha introducido el precio";
        } elseif ($precio < 0) {
            $errores['precio'] = "El precio debe ser positivo";
        }

        $nuevaDescripcion = $descripcion;
        if ($precio < 10) {
            $nuevaDescripcion .= " || 'Producto de oferta'";
        } elseif ($precio > 200) {
            $nuevaDescripcion .= " || 'Producto de calidad'";
        }

        if (!empty($errores)) {
            return $errores;
        }

        $this->productoDAO->editarProducto($id, $nombre, $nuevaDescripcion, $precio);
        return true;
    }

    public function mostrarProductos() {
        $productos = $this->productoDAO->mostrarProductos();
        return $productos;
    }

    public function mostrarProductosNulos() {
        $productosNulos = $this->productoDAO->mostrarProductosNulos();
        return $productosNulos;
    }


    public function buscarPorNombre($nombre) {
        if (empty($nombre)) {
            return "El nombre no puede estar vacío";
        }
        $producto = $this->productoDAO->buscarPorNombre($nombre);
        return $producto;
    }

    public function buscarPorId($id) {
        if (empty($id)) {
            return "El id no puede estar vacío";
        }

        $producto = $this->productoDAO->buscarPorId($id);
        return $producto;
    }
}
?>


