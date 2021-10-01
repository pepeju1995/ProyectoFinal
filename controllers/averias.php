<?php

class Averias extends Controller{

    function __construct(){
        if(!isset($_SESSION)){
            session_start();
        }
        
        if(isset($_SESSION['user'])){
            parent::__construct();
            $this->view->averias = [];
            $this->view->asegurado = "";
            $this->view->mensaje = "";
        } else {
            header('Location: '. constant('URL'). 'login');
        }
    }

    function render($vista = 'index'){
        $this->view->render('averia/'. $vista);
    }

    function crearAveria(){
        $nuevaAveria = array(
            $_POST['asegurado'],
            $_POST['descripcion']
        );
        if($this->model->insert($nuevaAveria)){
            $this->view->mensaje = "Nueva averia añadida.";
            $this->verAverias();
        } else {
            $this->view->mensaje = "No puede crearse la averia";
        }
    }

    function nuevaAveria($asegurado){
        $this->view->asegurado = $asegurado[0];
        $this->render();
    }

    function verAverias(){
        $averias = [];
        if($_SESSION['user'] != 'admin'){
            $averias = $this->model->getByAseguradora();
            $this->view->averias = $averias;
        } else {
            $averias = $this->model->get();
            $this->view->averias = $averias;
        }
        
        $this->render('verTodas');
    }

    //$averias = $this->model->getByAseguradora($_POST['asegurado']);
}

?>