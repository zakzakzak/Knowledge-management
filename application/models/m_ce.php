<?php

class M_ce extends CI_Model{

  // login
  public function cek_user($username, $password){
    $this->db->select('*');
    $this->db->from('user');
    $array = array('username' => $username, 'password' => $password);
    $this->db->where($array);
    return $this->db->get();
  }

  // permintaan
  public function data_permintaan($status){
    $this->db->or_where_in('status', $status);
    return $this->db->get('permintaan');
  }

  public function jumlah_jenis_barang($id_permin){
    return $this->db->query("SELECT COUNT(id_permintaan) AS jum FROM barang_permintaan WHERE id_permintaan = $id_permin");
  }

  public function hitung_status($status){
    return $this->db->query("SELECT COUNT(id_permintaan) AS jum FROM permintaan WHERE status = $status");
  }

  public function detail_permintaan($id_permintaan){
    $this->db->select('*');
    $this->db->from('permintaan');
    $this->db->where('id_permintaan', $id_permintaan);
    return $this->db->get();
  }

  public function history_permintaan($id_permintaan){
    $this->db->where('id_permintaan', $id_permintaan);
    return $this->db->get('history_Permintaan');
  }

  public function notifikasi_permintaan(){
    $this->db->select('*');
    $this->db->from('notifikasi');
    $this->db->or_where_in('status', "1");
    $this->db->or_where_in('status', "2");
    $this->db->or_where_in('status', "3");
    $this->db->or_where_in('status', "4");
    $this->db->or_where_in('status', "5");
    $this->db->or_where_in('status', "6");
    $this->db->order_by("id_not", "desc");
    return $this->db->get();
  }


  // barang permintaan
  public function data_barang_permintaan($id_permintaan){
    $this->db->select('barang_permintaan.*, barang.nama_barang, barang.mesin, barang.part_no, barang.satuan');
    $this->db->from('barang_permintaan');
    $this->db->join('barang', 'barang_permintaan.id_barang = barang.id_barang');
    $this->db->where('id_permintaan', $id_permintaan);
    $this->db->order_by("mesin", "desc");
    return $this->db->get();
  }

  public function barang_permintaan2($id_permintaan){
    $this->db->select('*');
    $this->db->from('barang_permintaan');
    $this->db->where('id_permintaan', $id_permintaan);
    return $this->db->get();
  }




  // Notifikasi
  // cek jika sudah terdaftar di Notifikasi
  public function cek_daftar_notifikasi($id_permintaan){
    $this->db->where('id_permintaan', $id_permintaan);
    return $this->db->get('notifikasi');
  }





  // barang

  public function jumlah_barang($id_barang){
    $array = array('id_barang' => $id_barang, 'status' => "0");
    return $this->db->where($array)->from("barang_detail")->count_all_results();
  }

  public function detail_jenis($id_barang){
    $this->db->where('id_barang', $id_barang);
    return $this->db->get('barang');
  }

  public function data_barang_detail($id_barang){
    $this->db->select('barang_detail.id_barang_detail, barang_detail.id_permintaan, barang_detail.qrcode, barang_detail.tgl_kapal, barang.*');
    $this->db->from('barang_detail');
    $this->db->join('barang', 'barang_detail.id_barang = barang.id_barang', 'inner');
    $this->db->where('barang.id_barang', $id_barang);
    $this->db->where('barang_detail.status', "0");
    return $this->db->get();
  }


  public function data_barang_rusak(){
    $this->db->select('barang_detail.*, barang.*');
    $this->db->from('barang_detail');
    $this->db->join('barang', 'barang_detail.id_barang = barang.id_barang', 'inner');
    $this->db->or_where_in('barang_detail.status', "1");
    $this->db->or_where_in('barang_detail.status', "2");
    $this->db->or_where_in('barang_detail.status', "3");
    return $this->db->get();
  }


  public function cek_barang_permintaan($id_permintaan, $id_barang){
    // untuk mengecek apakah jenis barang yg ingin ditambahkan sudah ada atau belum
    $this->db->select('*');
    $this->db->from('barang_permintaan');
    $this->db->where('id_barang', $id_barang);
    $this->db->where('id_permintaan', $id_permintaan);
    return $this->db->get();
  }




  // C.R.U.D
  public function data_barang(){
    return $this->db->get('barang');
  }

  public function update_data($where, $data, $table){
    $this->db->where($where);
    $this->db->update($table, $data);
  }

  public function input_data($table, $data){
    $this->db->insert($table, $data);
  }

  public function delete_data($where, $table){
    $this->db->where($where);
    $this->db->delete($table);
  }




  function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
  }







}


 ?>
