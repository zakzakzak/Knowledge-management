<?php
// define('BASEPATH') OR exit('No direct script access allowed');


class Signin extends CI_Controller{

  // Permintaan -----------------------------------------------
  public function index(){
    // a.k.a permintaan1

    // $this->load->view('na_templates/header');
    // $this->load->view('na_templates/sidebar');
    $this->load->view('view_signin');
    // $this->load->view('na_templates/footer');
  }

  public function login_user(){
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    redirect(base_url()."Main");



  }




}





 ?>
