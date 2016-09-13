<?php

/**
 * Created by PhpStorm.
 * User: Carles
 * Date: 08/09/2016
 * Time: 15:14
 */
class DVD_CapaSimple extends DVD
{
    public function __clone()
    {
        // TODO: Implement __clone() method.
        return new DVD_CapaSimple();
    }
    public function getCapacidad()
    {
        // TODO: Implement getCapacidad() method.
        return "4.7GB";
    }
    public function getNombre()
    {
        // TODO: Implement getNombre() method.
        return "DVD capa simple";
    }
    public function getPrecio()
    {
        // TODO: Implement getPrecio() method.
        return "5.00$";
    }

}