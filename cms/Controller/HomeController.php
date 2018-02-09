<?php
/**
 * Created by PhpStorm.
 * User: HUMANIK
 * Date: 30.01.2018
 * Time: 12:57
 */

namespace Cms\Controller;

class HomeController extends CmsController
{
    public function index()
    {   $data = ['name' => 'Mark'];
        $this->view->render('index', $data);
        echo 'Index page';
    }

    public function news($id)
    {
        echo  $id;
    }

}