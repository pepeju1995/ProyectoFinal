<?php

class AseguradoModel extends Model{
    function __construct()
    {
        parent::__construct();
    }

    function insert($datos){
        if($datos){
            $query = $this->db->connect()->prepare("INSERT INTO asegurados(nombre, apellido, direccion, localidad, cp, telefono, direccion_rep, localidad_rep, cp_rep, aseguradora) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $query->bind_param('ssssiissis', $datos[0], $datos[1], $datos[2], $datos[3], $datos[4],
                $datos[5], $datos[6], $datos[7], $datos[8], $datos[9]);
            var_dump($query->execute());
            if($query->execute()){
                return true;
            }
            else{
                return false;
            }
        }
    }
    
}

?>