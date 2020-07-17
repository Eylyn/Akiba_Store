<?php

namespace App\src\controller;

use App\config\Parameter;

class FrontController extends Controller
{

    public function home()
    {
        $products = $this->productDAO->getProducts();
        $events = $this->eventDAO->getEvents();
        return $this->view->render('frontend/home', [
            'products' => $products,
            'events' => $events,
        ]);
    }
}