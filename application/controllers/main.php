<?php
// define('BASEPATH') OR exit('No direct script access allowed');


class Main extends CI_Controller{

  // Permintaan -----------------------------------------------
  public function index(){
    // a.k.a permintaan1

    // $data['permintaan'] = $this->m_na->data_permintaan($id)->result();

    $this->load->view('na_templates/header');
    $this->load->view('na_templates/sidebar');
    $this->load->view('knowledge_sharing' );
    $this->load->view('na_templates/footer');
  }

  public function topik_det(){
    $this->load->view('na_templates/header');
    $this->load->view('na_templates/sidebar');
    $this->load->view('topik_detail' );
    $this->load->view('na_templates/footer');
  }

  public function learning_org(){
    $this->load->view('na_templates/header');
    $this->load->view('na_templates/sidebar');
    $this->load->view('learning_organization' );
    $this->load->view('na_templates/footer');
  }

  public function profile(){
    $this->load->view('na_templates/header');
    $this->load->view('na_templates/sidebar');
    $this->load->view('profile' );
    $this->load->view('na_templates/footer');
  }











 // cetak
 // public function cetak1($id_permintaan){
 //   $data['barang_permintaan'] = $this->m_na->data_barang_permintaan($id_permintaan)->result();
 //   $data['permintaan'] = $this->m_na->detail_permintaan($id_permintaan)->result();
 //   $this->load->view('cetak1', $data);
 // }
 //
 // public function cetak2($id_permintaan){
 //   $data['barang_permintaan'] = $this->m_na->data_barang_permintaan($id_permintaan)->result();
 //   $data['permintaan'] = $this->m_na->detail_permintaan($id_permintaan)->result();
 //   $this->load->view('cetak2', $data);
 // }
 //
 // public function cetak3($id_permintaan){
 //   $data['barang_permintaan'] = $this->m_na->data_barang_permintaan($id_permintaan)->result();
 //   $data['permintaan'] = $this->m_na->detail_permintaan($id_permintaan)->result();
 //   $this->load->view('cetak3', $data);
 // }
 //
 // public function cetak4(){
 //   $data['barang'] = $this->m_na->data_barang()->result();
 //   $this->load->view('cetak4', $data);
 // }

}





 ?>
