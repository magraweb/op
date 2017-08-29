<?php

class Controller {

    public function __construct()
    {
        if(!isset($_GET['controller'])){
            header("Location: index/index");
        }

        $controller = strtolower($_GET['controller'])."Controller";
        $method = strtolower($_GET['method']);

        include $controller.".php";
        $obj = new $controller();
        $obj->$method();

    }
}