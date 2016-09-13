<?php

/**
 * Created by PhpStorm.
 * User: Carles
 * Date: 09/09/2016
 * Time: 8:39
 */
abstract class AbstractPageDirector
{
    /**
     * AbstractPageDirector constructor.
     * @param AbstracPageBuilder $builderIn
     */
    abstract function __construct(AbstracPageBuilder $builderIn);

    /**
     * @return mixed
     */
    abstract function builderPage();

    /**
     * @return mixed
     */
    abstract function getPage();
}