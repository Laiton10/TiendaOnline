<?php

class DTOCliente {
    private $id;
    private $nombre;
    private $apellido;
    private $nickname;
    private $password;
    private $telefono;
    private $domicilio;

    public function __construct($id, $nombre, $apellido, $nickname, $password, $telefono, $domicilio) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->nickname = $nickname;
        $this->password = $password;
        $this->telefono = $telefono;
        $this->domicilio = $domicilio;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre): void
    {
        $this->nombre = $nombre;
    }


    public function getApellido()
    {
        return $this->apellido;
    }

    public function setApellido($apellido): void
    {
        $this->apellido = $apellido;
    }

    public function getNickname()
    {
        return $this->nickname;
    }


    public function setNickname($nickname): void
    {
        $this->nickname = $nickname;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password): void
    {
        $this->password = $password;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function setTelefono($telefono): void
    {
        $this->telefono = $telefono;
    }

    public function getDomicilio()
    {
        return $this->domicilio;
    }

    public function setDomicilio($domicilio): void
    {
        $this->domicilio = $domicilio;
    }

    public function __mostrarInfo() {
        return "Usuario: " . $this->nickname .
            "<br>" ."Id Cliente: " .$this->id;
    }
}
?>