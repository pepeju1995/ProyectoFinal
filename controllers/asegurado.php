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