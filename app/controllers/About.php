<?php

class About extends Controller
{
  public function index() {
    $this->view('about/index');
  }
  public function profile($nama = 'Bayu', $pekerjaan = 'Developer', $umur = 17)
  {
    $data['nama'] = $nama;
    $data['pekerjaan'] = $pekerjaan;
    $data['umur'] = $umur;
    $this->view('about/profile', $data);
  }
}