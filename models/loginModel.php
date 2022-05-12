<?php
//LOGIN
class LoginModel extends Model{
    function __construct(){
        parent::__construct();
        $query = $this->db->connect();
        $query->query(constant('TABLAADMIN'));
        $query->query(constant('TABLAASEGURADORA'));
        $query->query(constant('TABLAUSUARIOS'));
        $query->query(constant('TABLAASEGURADOS'));
        $query->query(constant('TABLAAVERIAS'));
        $clave_admin = md5('admin');
        $crear_admin = "INSERT INTO administrador (user, pass) VALUES ('admin', '$clave_admin');";
        $query->query($crear_admin);
    }

    function login($user, $pass){
        $query = $this->db->connect();
        $password = md5($pass);
        if($user == 'admin'){
            $stmt = $query->prepare('SELECT * FROM administrador WHERE user=? AND pass=?');
        } else {
            $stmt = $query->prepare('SELECT * FROM usuarios WHERE user=? AND pass=?');
        }
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