<?php

namespace App\Http;

class Response
{
    private $view;

    function __construct($view)
    {
        $this->view = $view;
    }

    function send()
    {
        $content = file_get_contents(pathView($this->view));

        require pathView('Layout');
    }
}
