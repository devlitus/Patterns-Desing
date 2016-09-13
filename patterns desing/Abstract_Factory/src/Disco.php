<?php

/**
 * Created by PhpStorm.
 * User: Carles
 * Date: 08/09/2016
 * Time: 15:09
 */
 abstract class Disco implements Prototipo
{
     public abstract function __clone();
     public abstract function getCapacidad();
     public abstract function getNombre();
     public abstract function getPrecio();

     public function __toString(){
         return $this->getNombre(). " (". $this->getCapacidad(). ") ". $this->getPrecio();
     }

}