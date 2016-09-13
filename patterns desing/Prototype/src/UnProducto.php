<?php
/**
 * Created by PhpStorm.
 * User: Carles
 * Date: 08/09/2016
 * Time: 19:23
 */

namespace src;


class UnProducto implements Producto
{
    private $atributo;

    public function UnProducto($atributo){
        $this->atributo = $atributo;
    }
    public function __clone()
    {
        // TODO: Implement __clone() method.
        return new UnProducto($this->atributo);
    }
    public function __toString()
    {
        // TODO: Implement __toString() method.
        return "esto es ".$this->atributo;
    }
}