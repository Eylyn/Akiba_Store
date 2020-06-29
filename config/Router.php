<?php

namespace App\config;

class Router 
{
    private $request;

    public function __construct()
    {
        $this->request = new Request();
    }
}