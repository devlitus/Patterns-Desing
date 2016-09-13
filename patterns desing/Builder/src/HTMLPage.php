<?php

/**
 * Created by PhpStorm.
 * User: Carles
 * Date: 09/09/2016
 * Time: 8:42
 */
class HTMLPage
{
    private $page = null;
    private $pageTitulo = null;
    private $pageHeading = null;
    private $pageText = null;

    function __construct(){}
    function showPage()
    {
        return $this->page;
    }

    /**
     * @param null $pageTitulo
     */
    public function setPageTitulo($pageTitulo)
    {
        $this->pageTitulo = $pageTitulo;
    }

    /**
     * @param null $pageHeading
     */
    public function setPageHeading($pageHeading)
    {
        $this->pageHeading = $pageHeading;
    }

    /**
     * @param null $pageText
     */
    public function setPageText($pageText)
    {
        $this->pageText .= $pageText;
    }
    function formatPage()
    {
        $this->page = '<!DOCTYPE html>';
        $this->page .= '<html>';
        $this->page .= '<head><titel>'.$this->pageTitulo.'</titel></head>';
        $this->page .= '<body>';
        $this->page .= '<h1>'.$this->pageHeading.'</h1>';
        $this->page .= $this->pageText;
        $this->page .= '</body>';
        $this->page .= '</html>';
    }
}