<?php

class Login extends Controller {
    
    function __construct(){
        parent::__construct();
        session_start();
    }

    function render(){
        $this->view->render('login/index');
    }

    function iniciarSesion(){
        $user = $_POST['usuario'];
        $pass = $_POST['contraseña'];
        if($this->model->login($user, $pass)){
            $_SESSION['user'] = $user;
            if($_SESSION['user'] == 'admin'){
                header('Location: '. constant('URL'). 'aseguradoras/verAseguradoras');
            } else {
                header('Location: '. constant('URL'). 'aseguradoras/verAseguradora/'. $_SESSION['user']);
            }
        }
    }

    function cerrarSesion(){
        session_unset();
        session_destroy();
        $this->render();
    }
}

?>