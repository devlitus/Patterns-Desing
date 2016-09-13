<?php

/**
 * Created by PhpStorm.
 * User: Carles
 * Date: 08/09/2016
 * Time: 15:15
 */
class DVD_DobleCapa extends DVD
{
    public function __clone()
    {
        // TODO: Implement __clone() method.
        return new DVD_CapaSimple();
    }
    public function getCapacidad()
    {
        // TODO: Implement getCapacidad() method.
        return "8.7GB";
    }
    public function getNombre()
    {
        // TODO: Implement getNombre() method.
        return "DVD Doble Capa";
    }
    public function getPrecio()
    {
        // TODO: Implement getPrecio() method.
        return "10.00$";
    }

}