<?php

namespace App;

class Router
{
    private $_url;
    private $_routes = [];

    public function __construct($url)
    {
        $this->_url = $url;
    }

    public function get($path, $callable)
    {
    }

    public function post($path, $callable)
    {
    }

    public function drive_check()
    {
        echo '<pre>';
        echo print_r($this->_routes);
        echo '</pre>';
    }

    // public function drive_check()
    // {
    //     if (!isset($this->routes[$_SERVER['REQUEST_METHOD']])) {
    //         throw new \Exception('Aucune route ne correspond');
    //     }
    // }
}
