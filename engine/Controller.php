<?php
/**
 * Created by PhpStorm.
 * User: HUMANIK
 * Date: 29.01.2018
 * Time: 16:09
 */

namespace Engine;


use Engine\DI\DI;

abstract class Controller
{
    /**
     * @var
     */
    protected $di;

    protected $db;

    protected $view;

    protected $config;

    protected $request;

    /**
     * HomeController constructor.
     * @param DI $di
     */
    public function __construct(DI $di)
    {
        $this->di = $di;
        $this->view = $this->di->get('view');
        $this->config = $this->di->get('config');
        $this->request = $this->di->get('request');
    }
}