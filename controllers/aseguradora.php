<?php
    class Aseguradora extends Controller {
        function __construct()
        {
            parent::__construct();
            $this->view->mensaje = "";
        }

        function render(){
            $this->view->render('aseguradora/index');
        }

        function nuevaAseguradora(){
            $newAseguradora = array(
                'nombre' => $_POST['nombre'],
                'cif' => $_POST['cif'],
                'direccion' => $_POST['direccion'],
                'localidad' => $_POST['localidad'],
                'cp' => (int) $_POST['codigopostal'],
                'telefono' => (int) $_POST['telefono'],
                'email' => $_POST['email'],
                'contacto' => $_POST['contacto']
            );

            if($this->model->insert($newAseguradora)){
                $mensaje = "Nueva aseguradora creada.";
            } else {
                $mensaje = "La aseguradora ya existe.";
            }

            $this->view->mensaje = $mensaje;
            $this->render();
        }

        function verAseguradoras(){

        }
    }
?>