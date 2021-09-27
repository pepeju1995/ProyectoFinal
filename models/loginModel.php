<?php

class LoginModel extends Model{
    function __construct(){
        parent::__construct();
        $query = $this->db->connect();
        if($query->query(constant('TABLAUSUARIOS'))){
            echo "Tabla creada";
        }
        $clave_admin = md5('admin');
        $crear_admin = "INSERT INTO usuarios (user, pass, rol) VALUES ('admin', '$clave_admin', 'user');";
        if($query->query($crear_admin)){
            echo "ADMIN Creado";
        }
    }

    function login($user, $pass){
        $query = $this->db->connect();
        $stmt = $query->prepare('SELECT * FROM usuarios WHERE user=?');
        $stmt->bind_param('s', $user);
        $stmt->execute();
        $result = $stmt->get_result()->fetch_row();

        if(count($result) > 0 && md5($pass) == $result[2]){
            $_SESSION['user_id'] = $result[0];
            echo "Sesion iniciada correctamente";
        } else {
            echo "Las credenciales no son correctas";
        }
    }

    function verificarClave($clave, $claveVer){
        if(md5($clave) == $claveVer){
            return true;
        }
        return false;
    }

    function logout(){

    }
}

?>