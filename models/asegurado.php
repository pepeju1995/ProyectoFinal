<?php

class Asegurado{
    public $id;
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
        $this->id = $datos[0];
        $this->nombre = $datos[1];
        $this->apellido = $datos[2];
        $this->direccion = $datos[3];
        $this->localidad = $datos[4];
        $this->cp = $datos[5];
        $this->telefono = $datos[6];
        $this->direccion_rep = $datos[7];
        $this->localidad_rep = $datos[8];
        $this->cp_rep = $datos[9];
        $this->aseguradora = $datos[10];
    }
}

?>