<?php
/**
 * Created by PhpStorm.
 * User: HUMANIK
 * Date: 11.02.2018
 * Time: 17:03
 */

namespace Engine\Core\Request;

class Request
{
    public $get = [];
    public $post = [];
    public $request = [];
    public $cookie = [];
    public $files = [];
    public $server = [];

    public function __construct()
    {
        $this->get = $_GET;
        $this->post = $_POST;
        $this->request = $_REQUEST;
        $this->cookie = $_COOKIE;
        $this->files = $_FILES;
        $this->server = $_SERVER;


    }

}