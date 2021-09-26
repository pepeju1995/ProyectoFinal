<?php

class Aseguradora{
    
    public $nombre;
    public $cif;
    public $direccion;
    public $localidad;
    public $cp;
    public $telefono;
    public $email;
    public $contacto;

    public function datosAseguradora($datos){
        $this->nombre = $datos[1];
        $this->cif = $datos[2];
        $this->direccion = $datos[3];
        $this->localidad = $datos[4];
        $this->cp = $datos[5];
        $this->telefono = $datos[6];
        $this->email = $datos[7];
        $this->contacto = end($datos);
    }

}

?>