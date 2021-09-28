<?php
class Aseguradoras extends Controller {

    function __construct()
    {
        session_start();
        if(isset($_SESSION['user'])){
            parent::__construct();
            $this->view->aseguradoras = [];
            $this->view->mensaje = "";
        } else {
            header('Location: '. constant('URL'). 'login');
        }
    }

    function render($vista = 'nuevaAseguradora'){
        $this->view->render('aseguradora/'.$vista);   
    }

    function crearAseguradora(){
        $newAseguradora = array(
            $_POST['nombre'],
            $_POST['contraseña'],
            $_POST['cif'],
            $_POST['direccion'],
            $_POST['localidad'],
            (int) $_POST['codigopostal'],
            (int) $_POST['telefono'],
            $_POST['email'],
            $_POST['contacto']
        );

        if($this->model->insert($newAseguradora)){
            $mensaje = "Nueva aseguradora creada.";
        } else {
            $mensaje = "La aseguradora ya existe.";
        }

        $this->view->mensaje = $mensaje;
        $this->verAseguradoras();
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
            $_SESSION["user"],
            $_POST['direccion'],
            $_POST['localidad'],
            (int) $_POST['codigopostal'],
            (int) $_POST['telefono'],
            $_POST['email'],
            $_POST['contacto']
        );

        if($this->model->update($newAseguradora)){
            $aseguradora = new Aseguradora();
            $aseguradora->datosAseguradora($newAseguradora);

            $this->view->aseguradora = $aseguradora;
            $this->view->mensaje = "Actualizacion realizada con exito";
        } else {
            $this->view->mensaje = "No se pudo actualizar";
        }
        $this->view->render('aseguradora/detalle');
    }

    function eliminarAseguradora($param = null){
        $id = $param[0];

        if($this->model->drop($id)){
            $mensaje = "Elemento eliminado";
        } else {
            $mensaje = "No se pudo eliminar el elemento";
        }
        //$this->verAseguradoras();
        echo $mensaje;
    }

}
?>