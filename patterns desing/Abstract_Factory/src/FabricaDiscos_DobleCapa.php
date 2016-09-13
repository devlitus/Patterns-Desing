<?php

/**
 * Created by PhpStorm.
 * User: Carles
 * Date: 08/09/2016
 * Time: 15:16
 */
class FabricaDiscos_DobleCapa implements FabricaDiscos
{
    public function crearBluray()
    {
        // TODO: Implement crearBluray() method.
        return new BluRay_CapaDoble();
    }
    public function crearDVD()
    {
        // TODO: Implement crearDVD() method.
        return new DVD_DobleCapa();
    }

}