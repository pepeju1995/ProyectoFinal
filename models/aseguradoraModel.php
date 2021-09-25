<?php

class AseguradoraModel extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    public function insert(){
        $conn = $this->db->connect();
        $conn->query(constant('TABLAASEGURADORA'));
        /*$query = $this->db->connect()->prepare('INSERT INTO aseguradoras VALUES ---');
        $query->execute();*/
    }
}

?>