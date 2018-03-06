<?php
/**
 * Created by PhpStorm.
 * User: HUMANIK
 * Date: 24.01.2018
 * Time: 18:17
 */

namespace Engine\Service\Load;

use Engine\Service\AbstractProvider;
use Engine\Load;

class Provider extends AbstractProvider
{
    /**
     * @var string
     */
    public $serviceName = 'load';

    /**
     * @return mixed
     */
    public function init()
    {
        $load = new Load();

        $this->di->set($this->serviceName, $load);
    }
}