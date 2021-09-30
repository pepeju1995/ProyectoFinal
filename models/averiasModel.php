<?php

include_once 'models/averia.php';

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

    function get(){
        $averias = [];
        try{
            $query = $this->db->connect()->query("SELECT * FROM averias;");
            
            while($row = $query->fetch_row()){
                $item = new Averia();
                $item->crearAveria($row);
                array_push($averias, $item);
            }
            return $averias;
        } catch(mysqli_sql_exception $e){
            return false;
        }
    }
}

?>