<?php
/**
 * Created by PhpStorm.
 * User: HUMANIK
 * Date: 24.01.2018
 * Time: 18:30
 */

return[
    Engine\Service\Database\Provider::class,
    Engine\Service\Router \Provider::class,
    Engine\Service\View \Provider::class,
    Engine\Service\Config \Provider::class,
    Engine\Service\Request \Provider::class,
    Engine\Service\Load \Provider::class,
];