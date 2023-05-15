<?php

class Home extends Controller{
    public function index($nama = "wafi" , $umur = 17)
    {
        $data['nama'] = $nama;
        $data['umur'] = $umur;
        $this->view('template/header');
        $this->view('home/index' , $data);
        $this->view('template/footer');
    }
}