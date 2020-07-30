<?php
// define('BASEPATH') OR exit('No direct script access allowed');


class Main_admin extends CI_Controller{

  // Permintaan -----------------------------------------------
  public function index(){
    // a.k.a permintaan1

    // $data['permintaan'] = $this->m_na->data_permintaan($id)->result();

    $this->load->view('admin_templates/header');
    $this->load->view('admin_templates/sidebar');
    $this->load->view('admin_knowledge_sharing' );
    $this->load->view('admin_templates/footer');
  }

  public function topik_det(){
    $this->load->view('admin_templates/header');
    $this->load->view('admin_templates/sidebar');
    $this->load->view('admin_topik_detail' );
    $this->load->view('admin_templates/footer');
  }










}





 ?>
