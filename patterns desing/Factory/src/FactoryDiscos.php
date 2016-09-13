<?php

/**
 * Created by PhpStorm.
 * User: Carles
 * Date: 08/09/2016
 * Time: 16:12
 */
class FactoryDiscos
{
    public function getDiscos($discosType){

        if ($discosType == null){
            return null;
        }
        if ($discosType == "dvd"){
            return new DVD();
        }else if ($discosType == "BluRay"){
            return new BlueRay();
        }
        return null;
    }

}