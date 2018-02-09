<?php
/**
 * Created by PhpStorm.
 * User: HUMANIK
 * Date: 24.01.2018
 * Time: 18:11
 */

namespace Engine\Service;

abstract class AbstractProvider
{
    /**
     * @var \Engine\DI\DI;
     */
    protected $di;

    /**
     * AbstractProvider constructor.
     * @param \Engine\DI\DI $di
     */
    public function __construct(\Engine\DI\DI $di)
    {
        $this->di = $di;
    }

    /**
     * @return mixed
     */
    abstract function init();
}