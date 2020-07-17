<?php

namespace App\src\controller;

use App\config\Parameter;

class FrontController extends Controller
{

    public function home()
    {
        $products = $this->productDAO->getProducts();
        return $this->view->render('frontend/home', [
            'products' => $products,
        ]);
    }
}