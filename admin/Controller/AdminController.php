<?php
/**
 * Created by PhpStorm.
 * User: HUMANIK
 * Date: 30.01.2018
 * Time: 16:14
 */

namespace Admin\Controller;


use Engine\Controller;

class AdminController extends Controller
{
    /**
     * AdminController constructor.
     * @param \Engine\DI\DI $di
     */
    public function __construct($di)
    {
        parent::__construct($di);
    }

}