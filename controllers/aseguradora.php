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
                'domicilio' => $_POST['domicilio'],
                'cif' => $_POST['cif'],
                'telefono' => $_POST['telefono'],
                'email' => $_POST['email'],
                'persContacto' => $_POST['persContacto']
            ];
            $nombre = $_POST['nombre'];
            $domicilio = $_POST['domicilio'];
            $cif = $_POST['cif'];
            $telefono = $_POST['telefono'];
            $email = $_POST['email'];
            $persContacto = $_POST['persContacto'];

            $this->model->insert($newAseguradora);
            echo "Alumno creado";
        }
    }
?>