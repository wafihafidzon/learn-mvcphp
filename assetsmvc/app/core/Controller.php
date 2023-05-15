<?php

class Controller {
    public function view($method, $params = [] )
    {
        require_once "../app/view/" . $method . ".php";
    }
}