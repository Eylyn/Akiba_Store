<?php

namespace App\config;

use App\src\controller\FrontController;
use App\src\controller\ErrorController;
use Exception;

class Router
{
    private $frontController;
    private $errorController;
    private $request;

    public function __construct()
    {
        $this->request = new Request();
        $this->frontController = new FrontController();
        $this->errorController = new ErrorController();
    }

    public function run()
    {
        $route = $this->request->getGet()->get('route');
        try {
            if (isset($route)) {
                switch ($route) {
                    case 'product':
                        $this->frontController->product($this->request->getGet()->get('productId'));
                        break;
                    case 'event':
                        $this->frontController->event($this->request->getGet()->get('eventId'));
                        break;
                    case 'productsType' :
                        $this->frontController->productsType($this->request->getGet()->get('productType'));
                    break;
                    default:
                        $this->errorController->errorNotFound();
                        break;
                }
            } else {
                $this->frontController->home();
            }
        } catch (Exception $e) {
            $this->errorController->errorServer();
        }
    }
}
