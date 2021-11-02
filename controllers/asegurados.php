<?php
    class Asegurados extends Controller {
        function __construct()
        {
            if(isset($_SESSION['user'])){
                parent::__construct();
                $this->view->asegurados = [];
                $this->view->mensaje = "";
            } else {
                header('Location: '. constant('URL'). 'login');
            }
            
        }

        function render($vista = 'index'){
            $this->view->render('asegurado/'. $vista);
        }

        function crearAsegurado(){
            $nuevoAsegurado = array(
                $_POST['nif'],
                $_POST['nombre'],
                $_POST['apellido'],
                $_POST['direccion'],
                $_POST['localidad'],
                (int)$_POST['cp'],
                (int)$_POST['telefono'],
                $_POST['direccion_rep'],
                $_POST['localidad_rep'],
                (int)$_POST['cp_rep'],
                $_SESSION['user']
            );
            if($this->model->insert($nuevoAsegurado)){
                http_response_code(200);
            } else {
                http_response_code(404);
            }
        }

        function actualizarAsegurado(){
            $aseguradoActualizado = array(
                $_POST['nif'],
                $_POST['direccion'], 
                $_POST['localidad'], 
                (int)$_POST['cp'], 
                (int)$_POST['telefono'],
                $_POST['direccion_rep'], 
                $_POST['localidad_rep'], 
                (int)$_POST['cp_rep']
            );

            if($this->model->update($aseguradoActualizado)){
                http_response_code(200);
            } else {
                http_response_code(404);
            }
        }

        function verAsegurados(){
            if($_SESSION['user'] != 'admin'){
                $asegurados = $this->model->getByAseguradora($_SESSION['user']);
                $this->view->asegurados = $asegurados;
            } else {
                $asegurados = $this->model->get();
                $this->view->asegurados = $asegurados;
            }
            $this->render('verTodos');
        }

        function verAsegurado($id = null) {
            if($id != null){
                $asegurado = $this->model->getById($id[0]);
                $this->view->asegurado = $asegurado;
                $this->render('detalle');
            }
        }

        function eliminarAsegurado($param = null){
            $id = $param;
            if($id != null){
                if($this->model->drop($id[0])){
                    http_response_code(200);
                } else{
                    http_response_code(404);
                }
            }
        }
    }
?>