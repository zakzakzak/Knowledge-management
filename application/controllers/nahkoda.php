<?php
// define('BASEPATH') OR exit('No direct script access allowed');


class Nahkoda extends CI_Controller{

  // Permintaan -----------------------------------------------
  public function index(){
    // a.k.a permintaan1
    $id = array('1');
    $data['permintaan'] = $this->m_na->data_permintaan($id)->result();

    $this->load->view('na_templates/header');
    $this->load->view('na_templates/sidebar');
    $this->load->view('na_permintaan1', $data);
    $this->load->view('na_templates/footer');
  }

  public function monitoring_permintaan(){
    $id = array('2','3','4','5');
    $data['permintaan'] = $this->m_na->data_permintaan($id)->result();
    $this->load->view('na_templates/header');
    $this->load->view('na_templates/sidebar');
    $this->load->view('na_permintaan2', $data);
    $this->load->view('na_templates/footer');
  }

  public function permintaan_selesai(){
    $id = array('6');
    $data['permintaan'] = $this->m_na->data_permintaan($id)->result();
    $this->load->view('na_templates/header');
    $this->load->view('na_templates/sidebar');
    $this->load->view('na_permintaan3', $data);
    $this->load->view('na_templates/footer');
  }
 // Permintaan -----------------------------------------------
 public function notifikasi(){
   $data['notifikasi'] = $this->m_na->notifikasi_permintaan()->result();
   $this->load->view('na_templates/header');
   $this->load->view('na_templates/sidebar');
   $this->load->view('na_notifikasi', $data);
   $this->load->view('na_templates/footer');
 }
 // NOTIFIKASI





 // Detail permintaan ---------------------------------------
 public function detail_permintaan($id_permintaan, $status){
   $this->load->view('na_templates/header');
   $this->load->view('na_templates/sidebar');
   $data['barang_permintaan'] = $this->m_na->data_barang_permintaan($id_permintaan)->result();
   $data['history'] = $this->m_na->history_permintaan($id_permintaan)->result();
   $data['id_permintaan'] = $id_permintaan;
   $data['status'] = $status;

   if ($status == '1') {
     $this->load->view('na_permintaan1_detail', $data);
   }
   elseif ($status == '2' || $status == '3' || $status == '4' || $status == '5') {
     $this->load->view('na_permintaan2_detail', $data);
   }
   elseif ($status == '6') {
     $this->load->view('na_permintaan3_detail', $data);
   }

   $this->load->view('na_templates/footer');

 }
 // Detail permintaan ---------------------------------------




 //
 //
 // // ceklist status 5
 // public function ubah_sudah_sampai($id_permintaan, $status, $id_barang_permintaan){
 //   $data = [
 //     'status'       => '3'
 //   ];
 //
 //   $where = [
 //     'id_barang_permintaan'         => $id_barang_permintaan,
 //   ];
 //   $this->m_na->update_data_status_barang_permintaan($where, $data, 'barang_permintaan');
 //
 //   redirect('Chiefengineer/detail_permintaan/'.$id_permintaan."/".$status);
 // }
 //
 // public function ubah_belum_sampai($id_permintaan, $status, $id_barang_permintaan){
 //   $data = [
 //     'status'       => '2'
 //   ];
 //
 //   $where = [
 //     'id_barang_permintaan'         => $id_barang_permintaan,
 //   ];
 //   $this->m_na->update_data_status_barang_permintaan($where, $data, 'barang_permintaan');
 //
 //
 //   redirect('Chiefengineer/detail_permintaan/'.$id_permintaan."/".$status);
 // }
 //
 //
 //
 //
 //
 //  public function barang(){
 //    $data['barang'] = $this->m_na->data_barang()->result();
 //    $this->load->view('ce_templates/header');
 //    $this->load->view('ce_templates/sidebar');
 //    $this->load->view('ce_barang', $data);
 //    $this->load->view('ce_templates/footer');
 //  }




 // BARANG  --------------------------------------------------------------------
 public function barang_kapal(){
   $data['barang'] = $this->m_na->data_barang()->result();
   $this->load->view('na_templates/header');
   $this->load->view('na_templates/sidebar');
   $this->load->view('na_barang1', $data);
   $this->load->view('na_templates/footer');
 }

 public function barang_rusak(){
   $data['barang'] = $this->m_na->data_barang_rusak()->result();
   $this->load->view('na_templates/header');
   $this->load->view('na_templates/sidebar');
   $this->load->view('na_barang2', $data);
   $this->load->view('na_templates/footer');
 }





















 // Step permintaan ------------------------------------------------------------
 public function tolak_permintaan($id_permintaan){
   // Permintaan
   $data = [
     'update_terakhir'       => date("Y-m-d"),
     'status'                => 0,
     'ket_status'            => "Permintaan Ditolak",
   ];
   $where = [
     'id_permintaan'         => $id_permintaan,
   ];
   $this->m_ce->update_data($where, $data, 'permintaan');

   // Notifikasi
   $data = [
     'id_permintaan'         => $id_permintaan,
     'status'                => 1,
     'isi_status'            => "Nahkoda menolak permintaan ID:".$id_permintaan,
     'tgl_not'               => date("Y-m-d"),
   ];
   $this->m_ce->input_data('notifikasi', $data);

   // Histori
   $data = [
     'id_permintaan'         => $id_permintaan,
     'user'                  => 2,
     'aktifitas'             => "Nahkoda menolak permintaan",
     'tanggal'               => date("Y-m-d"),
   ];
   $this->m_ce->input_data('history_Permintaan', $data);
   // -------------
   // Ambil semua barang, kembalikan status
   $list_barang = $this->m_na->barang_permintaan2($id_permintaan)->result();
   foreach ($$list_barang as $brg) {

       $data = [
         'status'                => 0,
       ];
       $where = [
         'id_permintaan'         => $id_permintaan,
         'status'                => 1,
       ];
       $this->m_ce->update_data($where, $data, 'barang_permintaan');

   }


   // ---------------

   redirect(base_url().'Nahkoda');
 }


 public function terima_permintaan($id_permintaan){
   // Permintaan
   $data = [
     'update_terakhir'       => date("Y-m-d"),
     'status'                => 2,
     'ket_status'            => "Permintaan Diterima",
   ];
   $where = [
     'id_permintaan'         => $id_permintaan,
   ];
   $this->m_ce->update_data($where, $data, 'permintaan');

   // Notifikasi
   $data = [
     'id_permintaan'         => $id_permintaan,
     'status'                => 2,
     'isi_status'            => "Nahkoda menyetujui permintaan ID:".$id_permintaan,
     'tgl_not'               => date("Y-m-d"),
   ];
   $this->m_ce->input_data('notifikasi', $data);

   // Histori
   $data = [
     'id_permintaan'         => $id_permintaan,
     'user'                  => 2,
     'aktifitas'             => "Nahkoda menyetujui permintaan",
     'tanggal'               => date("Y-m-d"),
   ];
   $this->m_ce->input_data('history_Permintaan', $data);

   redirect(base_url().'Nahkoda');
 }



 // cetak
 public function cetak1($id_permintaan){
   $data['barang_permintaan'] = $this->m_na->data_barang_permintaan($id_permintaan)->result();
   $data['permintaan'] = $this->m_na->detail_permintaan($id_permintaan)->result();
   $this->load->view('cetak1', $data);
 }

 public function cetak2($id_permintaan){
   $data['barang_permintaan'] = $this->m_na->data_barang_permintaan($id_permintaan)->result();
   $data['permintaan'] = $this->m_na->detail_permintaan($id_permintaan)->result();
   $this->load->view('cetak2', $data);
 }

 public function cetak3($id_permintaan){
   $data['barang_permintaan'] = $this->m_na->data_barang_permintaan($id_permintaan)->result();
   $data['permintaan'] = $this->m_na->detail_permintaan($id_permintaan)->result();
   $this->load->view('cetak3', $data);
 }

 public function cetak4(){
   $data['barang'] = $this->m_na->data_barang()->result();
   $this->load->view('cetak4', $data);
 }

}





 ?>
