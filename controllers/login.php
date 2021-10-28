<?php

class Login extends Controller {
    
    function __construct(){
        parent::__construct();
    }

    function render(){
        $this->view->render('login/index');
    }

    function iniciarSesion(){
        $user = $_POST['usuario'];
        $pass = $_POST['contraseña'];
        if($this->model->login($user, $pass)){
            $_SESSION['user'] = $user;
        } else {
            http_response_code(404);
        }
    }

    function cerrarSesion(){
        session_unset();
        session_destroy();
        $this->render();
    }
}

?>