<?php

class Asegurado{
    public $nombre;
    public $apellido;
    public $direccion;
    public $localidad;
    public $cp;
    public $telefono;
    public $direccion_rep;
    public $localidad_rep;
    public $cp_rep;
    public $aseguradora;

    public function datosAsegurado($datos){
        $this->nombre = $datos[0];
        $this->apellido = $datos[1];
        $this->direccion = $datos[2];
        $this->localidad = $datos[3];
        $this->cp = $datos[4];
        $this->telefono = $datos[5];
        $this->direccion_rep = $datos[6];
        $this->localidad_rep = $datos[7];
        $this->cp_rep = $datos[8];
        $this->aseguradora = $datos[9];
    }
}

?>