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
        $stmt->bind_param('sss', $datos[0], $_SESSION['id_asegurado'], $datos[1]);

        if($stmt->execute()){
            return true;
            unset( $_SESSION['id_asegurado']);
        } else {
            unset( $_SESSION['id_asegurado']);
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

    function getByAsegurado(){
        $averias = [];
        $asegurado = $_SESSION['id_asegurado'];
        try{
            $query = $this->db->connect()->query("SELECT * FROM averias WHERE asegurado = '$asegurado'");

            while($row = $query->fetch_row()){
                $item = new Averia();
                $item->crearAveria($row);
                array_push($averias, $item);
            }
            unset( $_SESSION['id_asegurado']);
            return $averias;
        } catch(mysqli_sql_exception $e){
            unset( $_SESSION['id_asegurado']);
            return false;
        }
    }
}

?>