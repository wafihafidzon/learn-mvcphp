<?php

class App {
    protected $controller = "home";
    protected $method = "index";
    protected $params = [];
    
    public function __construct()
    {
        $url = $this->parseURL();

        if( $url == NULL ) {
            $url[0] = $this->controller;
        } 
        
        if( file_exists("../app/controller/" . $url[0] . ".php") ) {
            $this->controller = $url[0];
            unset($url[0]);
        }
        
        require_once "../app/controller/" . $this->controller . ".php";
        
        if ( isset($url[1]) ) {
            if ( method_exists($this->controller , $url[1]) ) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }
        
        if( !empty($url) ) {
            $this->params = $url;
        }
    }
    
    public function parseURL()
    {
        if( isset($_GET['url']) ) {
            echo "test";
            $url = rtrim($_GET['url'] . "/");
            $url = filter_var($url , FILTER_SANITIZE_URL);
            $url = explode('/' , $url);
            return $url;
        }
    }
}