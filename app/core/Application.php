<?php

namespace IeCourse\core;

class Application {

    private $controller = 'userController';
    private $method = 'index';
    private $parameters = [];

    public function __construct()
    {
        $this->url();
        $this->render();
    }

    private function url() {
        if (!empty($_SERVER['QUERY_STRING'])) {
            $url = explode('/',$_SERVER['QUERY_STRING']);
            $this->controller = (isset($url[0])) ? $url[0] . 'Controller' : 'userController';
            $this->method = (isset($url[1])) ? $url[1] : 'index';
            unset($url[0],$url[1]);
            $this->parameters = array_values($url);
        }
    }

    private function render() {
        $controller = 'IeCourse\controllers\\' . $this->controller;
        if (class_exists($controller)) {
            $controller = new $controller;
            if (method_exists($controller,$this->method)) {
                call_user_func_array([$controller,$this->method],$this->parameters);
            } else {
                echo 'Method Not Found';
            }
        } else {
            echo 'Controller Not Found';
        }
    }

}