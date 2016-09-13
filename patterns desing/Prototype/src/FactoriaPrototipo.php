<?php
namespace src;

/**
 * Created by PhpStorm.
 * User: Carles
 * Date: 08/09/2016
 * Time: 19:21
 */
class FactoriaPrototipo
{
    private $mapaObjeto;
    private $nombrePorDefecto;

    public function FactoriaPrototipo(){
        $this->mapaObjeto = new \ArrayObject();
        //Se incluen en el mapa todos los productos prototipo
        $this->mapaObjeto->append("producto 1", new UnProducto(1));
    }
    public function create(){
        return createt($this->nombrePorDefecto);
    }

    public function createt($nombre){
        $this->nombrePorDefecto = $nombre;
        $objeto =  $this->mapaObjeto->getIteratorClass();
    }
}