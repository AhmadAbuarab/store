<?php

class Core {
    protected $controller = 'Home';
    protected $method = 'index';
    protected $param = array();

    public function __construct() {
        $url = $this->url();

        if (file_exists('../app/controller/' . ucwords($url[0]) . '.php')) {
            $this->controller = ucwords($url[0]);
            unset($url[0]);
        }

        require_once '../app/controller/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        if(isset($url[1])) {
            if(method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        $this->param = $url ? array_values($url) : array();
        call_user_func_array([$this->controller, $this->method], $this->param);
    }

    public function url() {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);

            return $url;
        }
    }
}