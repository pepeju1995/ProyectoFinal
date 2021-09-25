<?php
    class Aseguradora extends Controller {
        function __construct()
        {
            parent::__construct();
            $this->view->render('aseguradora/index');
        }

        function nuevaAseguradora(){
            $newAseguradora = [
                'nombre' => $_POST['nombre'],
                'cif' => $_POST['cif'],
                'direccion' => $_POST['direccion'],
                'localidad' => $_POST['localidad'],
                'cp' => $_POST['codigopostal'],
                'telefono' => $_POST['telefono'],
                'email' => $_POST['email'],
                'contacto' => $_POST['contacto']
            ];

            $this->model->insert($newAseguradora);
            echo "Alumno creado";
        }
    }
?>