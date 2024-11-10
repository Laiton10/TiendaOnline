<?php
 class DTOProducto{
    private $id;
    private $nombre;
    private $descripcion;
    private $precio;

    private $id_cliente;

    public function __construct($id,$nombre,$descripcion,$precio,$id_cliente){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->precio = $precio;
        $this->id_cliente = $id_cliente;
    }

    public function getId(){
        return $this->id;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getDescripcion(){
        return $this->descripcion;
    }
    public function getPrecio(){
        return $this->precio;
    }
     // En DTOProducto.php
     public function getClienteId() {
         return $this->id_cliente;
     }
     public function setId($id){
        $this->id = $id;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }
    public function setPrecio($precio){
        $this->precio = $precio;
    }
    public function setIdCliente($id_cliente){
        $this->id_cliente = $id_cliente;
    }

     public function mostrarInfo() {
         return "id: " . $this->id . ", nombre: " . $this->nombre . ", Descripcion: " . $this->descripcion . ", Precio: " . $this->precio . "ID cliente:" . $this->id_cliente;
     }

 }
?>
