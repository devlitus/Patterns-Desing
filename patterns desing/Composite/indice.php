<?php
function autoload($class){
    $url =  str_replace('\\', '/', $class);
    include "src/". $url .'.php';
}
spl_autoload_register('autoload');
$raiz = new GrupoFiguras('root');
$raiz->agregar(new Producto('producto A'));
$raiz->agregar(new Producto('producto B'));
var_dump($raiz->agregar($raiz));