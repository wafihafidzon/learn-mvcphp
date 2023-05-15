<?php

class About extends Controller {
    public function index($nama = "wafi" , $umur = 17)
    {
        $data['nama'] = $nama;
        $data['umur'] = $umur;
        $this->view('template/header');
        $this->view('about/index' , $data);
        $this->view('template/footer');
    }
}