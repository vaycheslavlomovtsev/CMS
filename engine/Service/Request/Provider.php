<?php
/**
 * Created by PhpStorm.
 * User: HUMANIK
 * Date: 24.01.2018
 * Time: 18:17
 */

namespace Engine\Service\Request;

use Engine\Service\AbstractProvider;
use Engine\Core\Request\Request;

class Provider extends AbstractProvider
{
    /**
     * @var string
     */
    public $serviceName = 'request';

    /**
     * @return mixed
     */
    public function init()
    {
        $request = new Request();

        $this->di->set($this->serviceName, $request);
    }
}