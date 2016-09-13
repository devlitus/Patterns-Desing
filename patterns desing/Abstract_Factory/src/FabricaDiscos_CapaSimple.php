<?php

/**
 * Created by PhpStorm.
 * User: Carles
 * Date: 08/09/2016
 * Time: 15:16
 */
class FabricaDiscos_CapaSimple implements FabricaDiscos
{
    public function crearBluray()
    {
        // TODO: Implement crearBluray() method.
        return new BluRay_CapaSimple();
    }
    public function crearDVD()
    {
        // TODO: Implement crearDVD() method.
        return new DVD_CapaSimple();
    }

}