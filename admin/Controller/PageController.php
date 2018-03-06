<?php
/**
 * Created by PhpStorm.
 * User: HUMANIK
 * Date: 07.02.2018
 * Time: 21:01
 */

namespace Admin\Controller;


class PageController extends AdminController
{
    public function listing()
    {
        $pageModel = $this->load->model("Page");

        $data['pages'] = $pageModel->repository->getPages();

        $this->view->render('pages/list', $data);
    }

    public function create()
    {
        $pageModel = $this->load->model("Page");

        $this->view->render('pages/create');


    }
}