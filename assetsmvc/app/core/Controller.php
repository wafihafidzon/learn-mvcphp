<?php

class Controller {
    public function view($method, $data = [] )
    {
        require_once "../app/view/" . $method . ".php";
    }
}