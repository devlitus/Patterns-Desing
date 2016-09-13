<?php
function autoload($class){
    $url =  str_replace('\\', '/', $class);
    include "src/". $url .'.php';
}
spl_autoload_register('autoload');
$instancia = Singelton::getInstancia();
echo $instancia->verMensaje();
