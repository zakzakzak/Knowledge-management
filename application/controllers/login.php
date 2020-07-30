<?php
// define('BASEPATH') OR exit('No direct script access allowed');


class Login extends CI_Controller{

  // Permintaan -----------------------------------------------
  public function index(){
    // a.k.a permintaan1
    $id = array('0');
    // $this->load->view('na_templates/header');
    // $this->load->view('na_templates/sidebar');
    $this->load->view('view_login');
    // $this->load->view('na_templates/footer');
  }

  public function login_user(){
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    // $user = $this->m_ce->cek_user($username, $password)->result();
    if ($username == "admin" && $password == "admin" ) {
      redirect(base_url()."Main_admin");
    }else {

      redirect(base_url()."Main");
    }
    // print_r($user);
    // if (count($user) == 1) {
    //   if ($user[0]->id == 1) {
    //   }elseif($user[0]->id == 2) {
    //     redirect(base_url()."Nahkoda");
    //   }elseif($user[0]->id == 3) {
    //     redirect(base_url()."managerarmada");
    //   }elseif($user[0]->id == 4) {
    //     redirect(base_url()."Generalmanager");
    //   }



  }




}





 ?>
