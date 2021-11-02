<?php

class Averia{
    public $id;
    public $aseguradora;
    public $asegurado;
    public $fecha;
    public $descripcion;

    function crearAveria($datos){
        $this->id = $datos[0];
        $this->aseguradora = $datos[1];
        $this->asegurado = $datos[2];
        $this->fecha = $datos[3];
        $this->descripcion = $datos[4];
    }
}

?>