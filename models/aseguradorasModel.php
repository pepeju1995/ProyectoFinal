<?php

include_once 'models/aseguradora.php';

class AseguradorasModel extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    public function get(){
        $items = [];

        try{
            $query = $this->db->connect()->query("SELECT * FROM aseguradoras");

            while($row = $query->fetch_row()){
                $item = new Aseguradora();
                $item->datosAseguradora($row);
                array_push($items, $item);
            }
            return $items;
        }catch(mysqli_sql_exception $e){
            echo "ERROR";
        }
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

    public function getById($id){
        $item = new Aseguradora();
        $query = $this->db->connect();
        $stmt = $query->prepare("SELECT * FROM aseguradoras WHERE cif = ?");
        try{
            $stmt->bind_param('s', $id);
            $stmt->execute();
            $result = $stmt->get_result();
            
            while($row = $result->fetch_row()){
                $item->datosAseguradora($row);
            }

            return $item;
        } catch(mysqli_sql_exception $e){
            return null;
        }
    }

    public function update($datos){
        $query = $this->db->connect();
        $stmt = $query->prepare("UPDATE aseguradoras SET nombre = ?, direccion = ?, localidad = ?, cp = ?, telefono = ?, email = ?, contacto = ? WHERE cif = ?");
        try{
            $stmt->bind_param('sssiisss', $datos[0], $datos[2], $datos[3], $datos[4],
            $datos[5], $datos[6], $datos[7], $datos[1]);
            $stmt->execute();
            return true;
        } catch(mysqli_sql_exception $e){
            return false;
        }
        
    }

    public function drop(){

    }
}

?>