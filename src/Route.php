<?php

namespace App;

class Route
{
    protected $_path;
    protected $_callable;

    public function __construct($path, $callable)
    {

        $this->_path = $path;
        $this->_callable = $callable;
    }
}
