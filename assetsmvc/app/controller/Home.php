<?php

class Home extends Controller{
    public function index($nama = "wafi" , $umur = 17)
    {
        $this->view('template/header');
        $this->view('home/index');
        $this->view('template/footer');
    }
}