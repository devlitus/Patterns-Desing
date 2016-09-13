<?php
/**
 * Created by PhpStorm.
 * User: Carles
 * Date: 08/09/2016
 * Time: 19:22
 */

namespace src;

//Los productos deben implementar de esta interfaz
interface Producto
{
    public function __clone();
    //Aquí van todas las operaciones comunes a los productos que genera la factoría
}