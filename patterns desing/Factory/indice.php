<?php
function autoload($class){
    $url =  str_replace('\\', '/', $class);
    include "src/". $url .'.php';
}
spl_autoload_register('autoload');

$Disco = new FactoryDiscos();
$dvd = $Disco->getDiscos('dvd');
$bluray = $Disco->getDiscos('BluRay');
$dvd->Disco();
echo '<br>';
$bluray->Disco();