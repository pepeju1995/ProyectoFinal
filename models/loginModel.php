<?php

class LoginModel extends Model{
    function __construct(){
        parent::__construct();
        $query = $this->db->connect();
        $query->query(constant('TABLAUSUARIOS'));
        $clave_admin = md5('admin');
        $crear_admin = "INSERT INTO usuarios (user, pass, rol) VALUES ('admin', '$clave_admin', 'admin');";
        $query->query($crear_admin);
    }

    function login($user, $pass){
        $query = $this->db->connect();
        $password = md5($pass);
        $stmt = $query->prepare('SELECT * FROM usuarios WHERE user=? AND pass=?');
        $stmt->bind_param('ss', $user, $password);
        $stmt->execute();
        $result = $stmt->get_result()->fetch_row();

        if(count($result)){
            return true;
        } else {
            return false;
        }
    }
}

?>