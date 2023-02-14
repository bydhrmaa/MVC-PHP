<?php

class About extends Controller
{
  public function index() {
    $data['judul'] = 'About';
    $this->view('templates/header', $data);
    $this->view('about/index');
    $this->view('templates/footer');
  }
  public function profile($nama = 'Bayu', $pekerjaan = 'Developer', $umur = 17)
  {
    $data['judul'] = 'profile';
    $data['nama'] = $nama;
    $data['pekerjaan'] = $pekerjaan;
    $data['umur'] = $umur;
    $this->view('templates/header', $data);
    $this->view('about/profile', $data);
    $this->view('templates/footer');
  }
}