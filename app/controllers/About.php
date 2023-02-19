<?php

class About extends Controller
{
  public function index($name = 'Bayu', $job = 'Developer', $age = 17) {
    $data['judul'] = 'About';
    $data['name'] = $name;
    $data['job'] = $job;
    $data['age'] = $age;
    $this->view('templates/header', $data);
    $this->view('about/index',$data);
    $this->view('templates/footer');
  }
  public function profile()
  {
    $data['judul'] = 'profile';
    $this->view('templates/header', $data);
    $this->view('about/profile', $data);
    $this->view('templates/footer');
  }
}