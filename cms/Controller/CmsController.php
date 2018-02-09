<?php
/**
 * Created by PhpStorm.
 * User: HUMANIK
 * Date: 30.01.2018
 * Time: 16:14
 */

namespace Cms\Controller;


use Engine\Controller;
use Engine\DI\DI;

class CmsController extends Controller
{
    /**
     * CmsController constructor.
     * @param DI $di
     */
    public function __construct(DI $di)
    {
        parent::__construct($di);
    }

    public function header()
    {

    }

}