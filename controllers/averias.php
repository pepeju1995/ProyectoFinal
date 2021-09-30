<?php

class Averias extends Controller{

    function __construct(){
        session_start();
        if(isset($_SESSION['user'])){
            parent::__construct();
            $this->view->averias = [];
        } else {
            header('Location: '. constant('URL'). 'login');
        }
    }

    function render($vista = 'index'){
        $this->view->render('averia/'. $vista);
    }

    function crearAveria(){
        $nuevaAveria = array(
            $_SESSION['user'],
            (int)$_SESSION['id_asegurado'],
            $_POST['descripcion']
        );

        if($this->model->insert($nuevaAveria)){
            echo "Nueva averia creada.";
        } else {
            echo "No puede crearse la averia";
        }
    }
}

?>