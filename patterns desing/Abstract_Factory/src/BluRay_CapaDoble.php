<?php

/**
 * Created by PhpStorm.
 * User: Carles
 * Date: 08/09/2016
 * Time: 15:14
 */
class BluRay_CapaDoble extends BluRay
{
    public function __clone()
    {
        // TODO: Implement __clone() method.
        return new BluRay_CapaDoble();
    }
    public function getCapacidad()
    {
        // TODO: Implement getCapacidad() method.
        return "16.7GB";
    }
    public function getNombre()
    {
        // TODO: Implement getNombre() method.
        return "BluRay Doble Capa";
    }
    public function getPrecio()
    {
        // TODO: Implement getPrecio() method.
        return "20.45$";
    }

}