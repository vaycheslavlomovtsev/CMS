<?php
/**
 * Created by PhpStorm.
 * User: HUMANIK
 * Date: 29.01.2018
 * Time: 16:25
 */

namespace Engine\Core\Router;


class DispatchedRouter
{
    private $controller;
    private $parameters;

    /**
     * DispatchedRouter constructor.
     * @param $controller
     * @param $parameters
     */
    public function __construct($controller, $parameters = [])
    {
        $this->controller = $controller;
        $this->parameters = $parameters;
    }

    /**
     * @return mixed
     */
    public function getController()
    {
        return $this->controller;
    }

    /**
     * @return mixed
     */
    public function getParameters()
    {
        return $this->parameters;
    }
}