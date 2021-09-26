<?php

class Database{

    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;

    public function __construct(){
        $this->host = constant('HOST');
        $this->db = constant('DB');
        $this->user = constant('USER');
        $this->password = constant('PASSWORD');
        $this->charset = constant('CHARSET');
    }

    function connect(){
        $conn = new mysqli($this->host, $this->user, $this->password);
        if(!$conn){
            echo "ERROOOOOR";
            return false;//die('No es posible realizar la conexion');
        } else {
            $conn->query("CREATE DATABASE IF NOT EXISTS " . $this->db);
            if(!$conn->query("USE " . $this->db)){
                die('No es posible realizar la conexion');
            }
            //mysqli_select_db($conn, $this->db);
            $conn->query("SET NAMES " . $this->charset);
            return $conn;
        }
    }
}

?>