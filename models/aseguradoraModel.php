<?php

class AseguradoraModel extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        
    }

    public function insert($datos){
        if($datos){
            $query = $this->db->connect();
            $query->query(constant('TABLAASEGURADORA'));
    
            $stmt = $query->prepare("INSERT INTO aseguradoras (nombre, cif, direccion, localidad, cp, telefono, email, contacto) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param('ssssiiss', $datos['nombre'], $datos['cif'], $datos['direccion'], $datos['localidad'], $datos['cp'],
            $datos['telefono'], $datos['email'], $datos['contacto']);
            if($stmt->execute()){
                echo "Nueva aseguradora creada";
            }
        }
    }

    public function update(){

    }

    public function drop(){

    }
}

?>