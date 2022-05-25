<?php
//LOGIN
class LoginModel extends Model{
    function __construct(){
        parent::__construct($_SERVER["HTTP_HOST"]);
        $query = $this->db->connect();
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