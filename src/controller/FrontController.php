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

    public function product($productId)
    {
        $product = $this->productDAO->getProduct($productId);
        return $this->view->render('frontend/product', [
            'product' => $product
        ]);
    }

    public function event($eventId)
    {
        $event = $this->eventDAO->getEvent($eventId);
        return $this->view->render('frontend/event', [
            'event' => $event
        ]);
    }
}