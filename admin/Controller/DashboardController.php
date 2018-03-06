<?php
/**
 * Created by PhpStorm.
 * User: HUMANIK
 * Date: 07.02.2018
 * Time: 21:02
 */

namespace Admin\Controller;

use Admin\Model\User\UserRepository;


class DashboardController extends AdminController
{
    public function index()
    {
        $userModel = $this->load->model('User');

        $userModel->repository->test();


      //  print_r($userModel->repository->getUsers());

        $this->view->render('dashboard');
    }
}