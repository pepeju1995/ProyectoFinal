<?php

class Database{

    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;

    public function __construct(){
        if(explode("-",gethostname())[0] == 'DESKTOP'){
            $this->host = constant('HOST');
            $this->db = constant('DB');
            $this->user = constant('USER');
            $this->password = constant('PASSWORD');
        } else {
            $this->host = constant('HOST2');
            $this->db = constant('DB2');
            $this->user = constant('USER2');
            $this->password = constant('PASSWORD2');
        }
        $this->charset = constant('CHARSET');
    }

    function createDataBases($query){
        $query->query(constant('TABLAADMIN'));
        $query->query(constant('TABLAASEGURADORA'));
        $query->query(constant('TABLAUSUARIOS'));
        $query->query(constant('TABLAASEGURADOS'));
        $query->query(constant('TABLAAVERIAS'));
        $clave_admin = md5('admin');
        $crear_admin = "INSERT INTO administrador (user, pass) VALUES ('admin', '$clave_admin');";
        $query->query($crear_admin);
    }

    function connect(){
        $conn = new mysqli($this->host, $this->user, $this->password);
        if(!$conn){
            echo "ERROOOOOR";
            return false;//die('No es posible realizar la conexion');
        } else {
            if(empty($conn->query("SHOW DATABASES LIKE '" . $this->db . "'")->fetch_all())){
                $conn->query("CREATE DATABASE IF NOT EXISTS " . $this->db);
                if(!$conn->query("USE " . $this->db)){
                    die('No es posible realizar la conexion');
                }
                $conn->query("SET NAMES " . $this->charset);
                $this->createDataBases($conn);
            }
            //mysqli_select_db($conn, $this->db);
            $conn->query("USE " . $this->db);
            return $conn;
        }
    }
}

?>