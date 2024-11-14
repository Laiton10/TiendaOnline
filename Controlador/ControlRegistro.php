<?php
require_once '../Modelo/DAOCliente.php';
require_once '../Modelo/DTOCliente.php';

class ControlRegistro {
    private $clienteDAO;

    public function __construct() {
        $this->clienteDAO = new DAOCliente();
    }

    public function registrarCliente($id, $nombre, $apellido, $nickname, $password, $telefono, $domicilio) {
        $errores = [];

        if (empty($id)) {
            $errores['id'] = "El campo id es obligatorio";
        }

        if (empty($nombre)) {
            $errores['nombre'] = "El campo nombre es obligatorio";
        } elseif (!ctype_alnum($nombre)) {
            $errores['nombre'] = "El campo nombre solo puede tener caracteres alfanumericos";
        }

        if (empty($nickname)) {
            $errores['nickname'] = "El campo nickname es obligatorio";
        }

        if (empty($password)) {
            $errores['password'] = "El campo password es obligatorio";
        } elseif (strlen($password) < 4 || strlen($password) > 10) {
            $errores['password'] = "La contrasena debe tener entre 4 y 10 caracteres";
        } elseif (!preg_match("/[A-Z]/", $password)) {
            $errores['password'] = "La contrasena debe contener al menos una letra mayuscula";
        } elseif (!preg_match("/[a-z]/", $password)) {
            $errores['password'] = "La contrasena debe contener al menos una letra minuscula";
        } elseif (!preg_match("/[0-9]/", $password)) {
            $errores['password'] = "La contrasena debe contener al menos un numero";
        }

        if (empty($telefono)) {
            $errores['telefono'] = "El campo telefono es obligatorio";
        }

        if (!empty($errores)) {
            return $errores;
        }

        $cliente = new DTOCliente($id, $nombre, $apellido, $nickname, $password, $telefono, $domicilio);
        $this->clienteDAO->agregarCliente($cliente);

        return true;
    }
    public function cerrarSesion(){
        session_unset();
        session_destroy();
    }

    public function buscarCliente($nickname, $password) {
        return $this->clienteDAO->buscarNicknameContrasena($nickname, $password);
    }

}
?>


