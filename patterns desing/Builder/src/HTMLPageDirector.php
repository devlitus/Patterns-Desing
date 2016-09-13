<?php

/**
 * Created by PhpStorm.
 * User: Carles
 * Date: 09/09/2016
 * Time: 9:05
 */
class HTMLPageDirector extends AbstractPageDirector
{
    private $builder = null;

    public function __construct(AbstracPageBuilder $builderIn)
    {
        //parent::__construct($builderIn);
        $this->builder = $builderIn;
    }
    public function builderPage()
    {
        // TODO: Implement builderPage() method.
        $this->builder->setTitle('Testing the HTMLPage');
        $this->builder->setHeading('Testing the Heading');
        $this->builder->setText('Testing, Testing, Testing');
        $this->builder->setText('Testing, Testing, Testing, ');
        $this->builder->setText('Testing, Testing, Testing');
        $this->builder->formatPage();
    }
    public function getPage()
    {
        // TODO: Implement getPage() method.
        return $this->builder->getPage();
    }
}