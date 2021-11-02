<?php
class Aseguradoras extends Controller {

    function __construct()
    {
        if(isset($_SESSION['user'])){
            parent::__construct();
            $this->view->aseguradoras = [];
        } else {
            header('Location: '. constant('URL'). 'login');
        }
    }

    function render($vista = 'index'){
        $this->view->render('aseguradora/'.$vista);   
    }

    function nuevaAseguradora(){
        $this->render('nuevaAseguradora');
    }

    function crearAseguradora(){
        $newAseguradora = array(
            $_POST['nombre'],
            $_POST['contraseña'],
            $_POST['nif'],
            $_POST['direccion'],
            $_POST['localidad'],
            (int) $_POST['cp'],
            (int) $_POST['telefono'],
            $_POST['email'],
            $_POST['contacto']
        );

        if($this->model->insert($newAseguradora)){
            http_response_code(200);
        } else {
            http_response_code(404);
        }
    }

    function verAseguradoras(){
        $aseguradoras = $this->model->get();
        $this->view->aseguradoras = $aseguradoras;
        $this->render('index');
    }

    function verAseguradora($param = null){
        $id = $param[0];
        $aseguradora = $this->model->getById($id);

        $this->view->aseguradora = $aseguradora;
        $this->view->render('aseguradora/detalle');
    }

    function actualizarAseguradora(){
        $newAseguradora = array(
            $_POST['nombre'],
            $_POST['nif'],
            $_POST['direccion'],
            $_POST['localidad'],
            (int) $_POST['cp'],
            (int) $_POST['telefono'],
            $_POST['email'],
            $_POST['contacto']
        );

        if($this->model->update($newAseguradora)){
            http_response_code(200);
        } else {
            http_response_code(404);
        }
    }

    function eliminarAseguradora($param = null){
        $id = $param[0];
        
        if($this->model->drop($id)){
            http_response_code(200);
        } else {
            http_response_code(404);
        }
    }

}
?>