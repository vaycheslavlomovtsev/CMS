<?php
/**
 * Created by PhpStorm.
 * User: HUMANIK
 * Date: 07.02.2018
 * Time: 21:01
 */

namespace Admin\Controller;


class LoginController extends AdminController
{
    public function form()
    {
        $this->view->render('login');
    }
}