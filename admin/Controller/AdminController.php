<?php
/**
 * Created by PhpStorm.
 * User: HUMANIK
 * Date: 30.01.2018
 * Time: 16:14
 */

namespace Admin\Controller;


use Engine\Controller;
use Engine\Core\Auth\Auth;

class AdminController extends Controller
{
    /**
     * @var Auth
     */
    protected $auth;

    public $data = [];

    /**
     * AdminController constructor.
     * @param \Engine\DI\DI $di
     */
    public function __construct($di)
    {
        parent::__construct($di);

        $this->auth = new Auth();


        if ($this->auth->hashUser() == null) {
            header('Location: /admin/login/');
            exit;
        }

    }

    /**
     * Check Auth
     */
    public function checkAuthorization()
    {
        /*if ($this->auth->hashUser() !== null) {
            $this->auth->authorize($this->auth->hashUser());
        }

        if (!$this->auth->authorized()) {
            //redirect
            header('Location: /admin/login/');
            exit;
        }*/
    }


    public function logout()
    {
        $this->auth->unAuthorize();
        header('Location: /admin/login/');
        exit;
    }
}