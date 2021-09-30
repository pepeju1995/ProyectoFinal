<?php
    class Asegurado extends Controller {
        function __construct()
        {
            session_start();
            if(isset($_SESSION['user'])){
                parent::__construct();
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
                echo "Nuevo asegurado creado";
            } else {
                echo "No se ha podido crear el asegurado";
            }
        }

        function modificarAsegurado($id){

        }

        function verAsegurados(){

        }

        function verAsegurado($id){

        }

        function eliminarAsegurado($id){

        }
    }
?>