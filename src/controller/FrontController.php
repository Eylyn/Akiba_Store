<?php

namespace App\src\controller;

use App\config\Parameter;

class FrontController extends Controller
{

    public function home()
    {
        return $this->view->render('frontend/home');
    }
}