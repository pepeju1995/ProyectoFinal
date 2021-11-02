<?php

class Aseguradora{
    
    public $nombre;
    public $nif;
    public $direccion;
    public $localidad;
    public $cp;
    public $telefono;
    public $email;
    public $contacto;

    public function datosAseguradora($datos){
        $this->nombre = $datos[0];
        $this->nif = $datos[1];
        $this->direccion = $datos[2];
        $this->localidad = $datos[3];
        $this->cp = $datos[4];
        $this->telefono = $datos[5];
        $this->email = $datos[6];
        $this->contacto = $datos[7];
    }

}

?>