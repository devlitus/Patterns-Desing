<?php

/**
 * Created by PhpStorm.
 * User: Carles
 * Date: 08/09/2016
 * Time: 16:44
 */
class Singelton
{
    private static $instacia;

    public static function getInstancia(){
        return self::$instacia = new self();
    }
    public function verMensaje(){
        echo "Soy una instancia de Singelton";
    }
}