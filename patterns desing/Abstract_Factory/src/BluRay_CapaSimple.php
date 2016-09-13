<?php

/**
 * Created by PhpStorm.
 * User: Carles
 * Date: 08/09/2016
 * Time: 15:13
 */
class BluRay_CapaSimple extends BluRay
{
    public function __clone()
    {
        // TODO: Implement __clone() method.
        return new BluRay_CapaSimple();
    }
    public function getCapacidad()
    {
        // TODO: Implement getCapacidad() method.
        return "8.7GB";
    }
    public function getNombre()
    {
        // TODO: Implement getNombre() method.
        return "BluRay capa simple";
    }
    public function getPrecio()
    {
        // TODO: Implement getPrecio() method.
        return "10.45$";
    }

}