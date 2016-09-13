<?php
/**
 * Created by PhpStorm.
 * User: Carles
 * Date: 09/09/2016
 * Time: 8:27
 */
function autoload($class){
    $url =  str_replace('\\', '/', $class);
    include "src/". $url .'.php';
}
spl_autoload_register('autoload');


writeln('BEGIN TESTING BUILDER PATTER');
writeln('');

$pageBuilder = new HTMLPageBuilder();
$pageDirector = new HTMLPageDirector($pageBuilder);
$pageDirector->builderPage();
$page = $pageDirector->getPage();
writeln($page->showPage());
writeln('');
writeln('END TESTING BUILDER PATTER');
function writeln($lineIn)
{
    echo $lineIn.'<br>';
}