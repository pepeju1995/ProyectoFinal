<?php

class AseguradoraModel extends Model{

    public function __construct()
    {
        parent::__construct();
        $conn = $this->db->connect();
        $conn->query("CREATE TABLE IF NOT EXISTS aseguradoras (`ID` int() NOT NULL auto_increment,
        `Nombre` varchar(100), `Domicilio` varchar(100), `CIF` varchar(8), `Telefono` int(9), ");
        $conn->close();
    }

    public function insert($datos){
        $query = $this->db->connect()->prepare('INSERT INTO aseguradoras VALUES ---');
        $query->execute();
    }
}

?>