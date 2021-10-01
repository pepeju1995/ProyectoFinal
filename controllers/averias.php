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
            $this->verAverias();
        } else {
            echo "No puede crearse la averia";
        }
    }

    function nuevaAveria($asegurado){
        $this->view->asegurado = $asegurado[0];
        $this->render();
    }

    function verAverias(){
        $averias = [];
        if($_SESSION['user'] != 'admin'){
            $averias = $this->model->getByAsegurado($_POST['asegurado']);
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