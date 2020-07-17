<?php

namespace App\src\controller;

use App\config\Request;
use App\src\model\View;
use App\src\DAO\EventDAO;
use App\src\DAO\OrderDAO;
use App\src\DAO\PackageDAO;
use App\src\DAO\ProductDAO;
use App\src\DAO\ReviewDAO;
use App\src\DAO\UserDAO;



abstract class Controller
{
    protected $eventDAO;
    protected $orderDAO;
    protected $packageDAO;
    protected $productDAO;
    protected $reviewDAO;
    protected $userDAO;
    protected $view;
    private $request;
    protected $get;
    protected $post;
    protected $session;

    public function __construct()
    {
        $this->eventDAO = new EventDAO();
        /*$this->orderDAO = new OrderDAO();
        $this->packageDAO = new PackageDAO;*/
        $this->productDAO = new ProductDAO();
        /*$this->reviewDAO = new ReviewDAO();*/
        $this->userDAO = new UserDAO();
        $this->view = new View();
        $this->request = new Request();
        $this->get = $this->request->getGet();
        $this->post = $this->request->getPost();
        $this->session = $this->request->getSession();
    }
}