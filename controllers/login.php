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
        $this->model->login($user, $pass);
    }

    function cerrarSession(){

    }
}

?>