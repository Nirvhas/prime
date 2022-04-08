<?php

namespace App\Http;

class Request
{
    private $controller;
    private $method;

    public function setController($value)
    {
        if (empty($value[1])) {
            $this->controller = "home";
        } else {
            $this->controller = $value[1];
        }
    }

    public function getController()
    {
        $aux = strtolower($this->controller); // pasar a minuscula
        $aux = ucfirst($aux); // primera mayuscula
        $aux = '\App\Http\Controllers\\' . $aux . 'Controller';
        return $aux;
    }

    public function setMethod($value)
    {
        if (empty($value[2])) {
            $this->method = "index";
        } else {
            $this->method = $value[2];
        }
    }

    public function getMethod()
    {
        $aux = strtolower($this->method);
        return $aux;
    }

    public function __construct()
    {
        $segment = explode('/', $_SERVER['REQUEST_URI']);
        $this->setController($segment);
        $this->setMethod($segment);
    }

    public function send()
    {
        $myController = $this->getController();
        $myMethod = $this->getMethod();
        $myResponse = call_user_func([new $myController, $myMethod]);
        $myResponse->send();
    }
}
