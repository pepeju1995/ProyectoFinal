<?php

include_once 'models/asegurado.php';

class AseguradosModel extends Model{
    function __construct()
    {
        parent::__construct();
    }

    function insert($datos){
        if($datos){
            $query = $this->db->connect();
            $stmt = $query->prepare("INSERT INTO asegurados (nombre, apellido, direccion, localidad, cp, telefono, direccion_rep, localidad_rep, cp_rep, aseguradora) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param('ssssiissis', $datos[0], $datos[1], $datos[2], $datos[3], $datos[4], $datos[5], $datos[6],
                $datos[7], $datos[8], $datos[9]);
            
            if($stmt->execute()){
                return true;
            }
            else{
                return false;
            }
        }
    }

    function get(){
        $asegurados = [];
        try {
            $query = $this->db->connect()->query("SELECT * FROM asegurados");
            while($row = $query->fetch_row()){
                $item = new Asegurado();
                $item->datosAsegurado($row);
                array_push($asegurados, $item);
            }
            return $asegurados;
        } catch(mysqli_sql_exception $e) {
            return false;
        }
    }

    function getById($id){
        $asegurados = [];
        try{
            $query = $this->db->connect()->query("SELECT * FROM asegurados WHERE aseguradora = '$id'");
            while($row = $query->fetch_row()){
                $item = new Asegurado();
                $item->datosAsegurado($row);
                array_push($asegurados, $item);
            }
            return $asegurados;
        } catch(mysqli_sql_exception $e){
                return false;
        }
    }
    
}

?>