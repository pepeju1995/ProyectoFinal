<?php
    class Conectar {
        private $host, $user, $pass, $database, $charset;

        public function __construct() {
            $db_cfg = require_once 'config/database.php';
            $this->host = $db_cfg["host"];
            $this->user = $db_cfg["user"]; 
            $this->pass = $db_cfg["pass"];
            $this->database = $db_cfg["database"];
            $this->charset = $db_cfg["charset"];
        }

        public function conexion() {
            $conn = new mysqli($this->host, $this->user, $this->pass);
            if(!$conn){
                die('No ha sido posible realizar la conexion.');
            } else {
                $conn->query("SET NAMES '".$this->charset."'");
                $conn->query("CREATE DATABASE [IF NOT EXISTS] ".$this->database);
                echo "La conexion se ha realizado con exito";
                return $conn;
            }
        }
    }
?>