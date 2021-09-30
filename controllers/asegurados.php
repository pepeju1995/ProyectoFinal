<?php
    class Asegurados extends Controller {
        function __construct()
        {
            session_start();
            if(isset($_SESSION['user'])){
                parent::__construct();
                $this->view->asegurados = [];
            } else {
                header('Location: '. constant('URL'). 'login');
            }
            
        }

        function render($vista = 'index'){
            $this->view->render('asegurado/'. $vista);
        }

        function crearAsegurado(){
            $nuevoAsegurado = array(
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
                $this->verAsegurados();
            } else {
                echo "No se ha podido crear el asegurado";
            }
        }

        function actualizarAsegurado(){
            $aseguradoActualizado = array(
                (int)$_POST['id'],
                $_POST['direccion'], 
                $_POST['localidad'], 
                (int)$_POST['cp'], 
                (int)$_POST['telefono'],
                $_POST['direccion_rep'], 
                $_POST['localidad_rep'], 
                (int)$_POST['cp_rep']
            );

            if($this->model->update($aseguradoActualizado)){
                echo "Actualizado con exito";
            } else {
                echo  "No se pudo actualizar";
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

        function eliminarAsegurado($id){

        }
    }
?>