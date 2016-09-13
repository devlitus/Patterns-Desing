<?php

/**
 * Created by PhpStorm.
 * User: Carles
 * Date: 12/09/2016
 * Time: 14:21
 */
abstract class Figura
{
    protected $nombre;
    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }
    abstract public function agregar(Figura $fig);
    abstract public function eliminar(Figura $fig);
    abstract public function mostrar($num);
}