<?php
function autoload($class){
    $url =  str_replace('\\', '/', $class);
    include "src/". $url .'.php';
}
spl_autoload_register('autoload');

$fabrica = new FabricaDiscos_DobleCapa();
$dvd = $fabrica->crearDVD();
$BlueRay = $fabrica->crearBluray();

echo $dvd. '<br>';
echo $BlueRay;
echo '<br>';
$fabrica = new FabricaDiscos_CapaSimple();
$dvd = $fabrica->crearDVD();
$BlueRay = $fabrica->crearBluray();
echo $dvd. '<br>';
echo $BlueRay;