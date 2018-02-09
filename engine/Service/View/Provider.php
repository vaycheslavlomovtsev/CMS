<?php
/**
 * Created by PhpStorm.
 * User: HUMANIK
 * Date: 24.01.2018
 * Time: 18:17
 */

namespace Engine\Service\View;

use Engine\Service\AbstractProvider;
use Engine\Core\Template\View;

class Provider extends AbstractProvider
{
    /**
     * @var string
     */
    public $serviceName = 'view';

    /**
     * @return mixed
     */
    public function init()
    {
        $view = new View();

        $this->di->set($this->serviceName, $view);
    }
}