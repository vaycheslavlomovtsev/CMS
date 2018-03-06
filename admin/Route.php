<?php

$this->router->add('login', '/admin/login/', 'LoginController:form');
$this->router->add('admin', '/admin/auth/', 'LoginController:authAdmin','POST');
$this->router->add('dashboard', '/admin/', 'DashboardController:index');
$this->router->add('logout', '/admin/logout/', 'AdminController:logout');
$this->router->add('pages', '/admin/pages/', 'PageController:listing');
$this->router->add('create', '/admin/create/', 'PageController:create');
