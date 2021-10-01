<?php

class Averias extends Controller{

    function __construct(){
        if(!isset($_SESSION)){
            session_start();
        }
        
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
            $_POST['descripcion']
        );
        if($this->model->insert($nuevaAveria)){
            $this->verAverias();
        } else {
            echo "No puede crearse la averia";
        }
    }

    function verAverias(){
        $averias = [];
        if($_SESSION['user'] != 'admin'){
            $averias = $this->model->getByAsegurado();
            $this->view->averias = $averias;
        } else {
            $averias = $this->model->get();
            $this->view->averias = $averias;
        }
        
        $this->render('verTodas');
    }

    function verAveria($id){

    }

    function modificarAveria(){

    }

    function eliminarAveria($id){

    }
}

?>