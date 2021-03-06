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

    public function productsType($productType)
    {
        $products = $this->productDAO->getProductType($productType);

        return $this->view->render('frontend/productsType', [
            'productType' => $productType,
            'products' => $products
        ]);
    }

    public function event($eventId)
    {
        $event = $this->eventDAO->getEvent($eventId);

        return $this->view->render('frontend/event', [
            'event' => $event
        ]);
    }

    public function events()
    {
        $events = $this->eventDAO->getEvents();

        return $this->view->render('frontend/events', [
            'events' => $events
        ]);
    }

    public function packages()
    {
        $packages = $this->packageDAO->getPackages();

        return $this->view->render('frontend/packages', [
            'packages' => $packages,
        ]);
    }

    public function package($packageId)
    {
        $package = $this->packageDAO->getPackage($packageId);

        return $this->view->render('frontend/package', [
            'package' => $package,
        ]);
    }

    public function register(Parameter $post)
    {
        if ($post->get('submit')) {
            $this->userDAO->register($post);
            $this->session->set('register', '<p> Votre inscription a bien été effectuée</p> <br>');
            header("Location: index.php");
        }
        return $this->view->render('frontend/register');
    }
}