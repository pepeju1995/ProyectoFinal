<?php

class Averia{
    public $aseguradora;
    public $asegurado;
    public $fecha;
    public $descripcion;

    function crearAveria($datos){
        $this->aseguradora = $datos[1];
        $this->asegurado = $datos[2];
        $this->fecha = $datos[3];
        $this->descripcion = $datos[4];
    }
}

?>