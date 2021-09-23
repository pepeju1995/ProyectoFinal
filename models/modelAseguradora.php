<?php
    class Aseguradora {
     
        //Atributos de una aseguradora
        private $nombre;
        private $domicilio;
        private $cif;
        private $telefono;
        private $email;
        private $persContacto;

        public function __construct($nombre, $domicilio, $cif, $telefono, $email, $persContacto){
            $this->nombre = $nombre;
            $this->domicilio = $domicilio;
            $this->cif = $cif;
            $this->telefono = $telefono;
            $this->email = $email;
            $this->persContacto = $persContacto;
        }

        public function index(){

        }

        public function ver() {
            
        }

        public function guardar(){

        }

        public function actualizar() {

        }

        public function eliminar() {

        }
    }
?>