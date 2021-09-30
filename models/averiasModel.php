<?php

class AveriasModel extends Model{
    function __construct(){
        parent::__construct();
    }

    function insert($datos){
        $query = $this->db->connect();
        $stmt = $query->prepare("INSERT INTO averias (aseguradora, asegurado, fecha, descripcion) 
            VALUES (?, ?, now(), ?)");
        $stmt->bind_param('sis', $datos[0], $datos[1], $datos[2]);

        if($stmt->execute()){
            return true;
        } else {
            return false;
        }
    }
}

?>