<?php

class Home extends Controller {
    public function index($nama = 'wafi', $umur = 16) 
    {
        $data['nama'] = $nama;
        $data['umur'] = $umur;
        $data['judul'] = "Homepage :)";
        $this->view('templates/header' , $data);
        $this->view('home/index' , $data);
        $this->view('templates/footer');
    }
}