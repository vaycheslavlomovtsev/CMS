<?php
/**
 * Created by PhpStorm.
 * User: HUMANIK
 * Date: 07.02.2018
 * Time: 21:02
 */

namespace Admin\Controller;


class DashboardController extends AdminController
{
    public function index()
    {
        $this->view->render('dashboard');
    }
}