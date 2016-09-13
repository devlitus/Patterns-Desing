<?php

/**
 * Created by PhpStorm.
 * User: Carles
 * Date: 12/09/2016
 * Time: 14:21
 */
class GrupoFiguras extends Figura
{
    private $array;
    public function __construct($nombre)
    {
        parent::__construct($nombre);
        $this->array = new ArrayObject();
    }
    public function agregar(Figura $fig)
    {
        // TODO: Implement agregar() method.
       $this->array->append($fig);
    }
    public function eliminar(Figura $fig)
    {
        // TODO: Implement eliminar() method.
        $this->array->offsetUnset($fig);
    }
    public function mostrar($num)
    {
        // TODO: Implement mostrar() method.
        echo $this->nombre.' nivel '. $num;
        for ($i=0; $i<count($this->array); $i++){
            $this->array->offsetGet($i);
            $this->mostrar($num + 1);
        }
    }
    public function __toString()
    {
        // TODO: Implement __toString() method.
        return 'ver: '.list($agregar, $eliminar, $mostrar)= $this->array;
    }
}