<?php

/**
 * Created by PhpStorm.
 * User: Carles
 * Date: 09/09/2016
 * Time: 8:55
 */
class HTMLPageBuilder extends AbstracPageBuilder
{
    private $page = null;

    /**
     * HTMLPageBuilder constructor.
     */
    function __construct()
    {
        $this->page = new HTMLPage();
    }

    /**
     * @param $titleIn
     */
    function setTitle($titleIn)
    {
        $this->page->setPageTitulo($titleIn);
    }

    /**
     * @param $headingIn
     */
    function setHeading($headingIn)
    {
        $this->page->setPageHeading($headingIn);
    }

    /**
     * @param $textIn
     */
    function setText($textIn)
    {
        $this->page->setPageText($textIn);
    }

    /**
     *
     */
    function formatPage()
    {
        $this->page->formatPage();
    }

    /**
     * TODO: Implement getPage() method.
     * @return HTMLPage|null
     */
    function getPage()
    {
        return $this->page;
    }
}