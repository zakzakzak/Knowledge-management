<?php

class M_ma extends CI_Model{

  // permintaan
  public function data_permintaan($id){
    $this->db->or_where_in('status', $id);
    return $this->db->get('permintaan');
  }

  public function detail_permintaan($id){
    $this->db->or_where_in('id_permintaan', $id);
    return $this->db->get('permintaan');
  }


  public function detail_permintaan2($id_permintaan){
    $this->db->select('*');
    $this->db->from('permintaan');
    $this->db->where('id_permintaan', $id_permintaan);
    return $this->db->get();
  }

  public function jumlah_jenis_barang($id_permin){
    return $this->db->query("SELECT COUNT(id_permintaan) AS jum FROM barang_permintaan WHERE id_permintaan = $id_permin");
  }

  public function hitung_status($status){
    return $this->db->query("SELECT COUNT(id_permintaan) AS jum FROM permintaan WHERE status = $status");
  }


  public function history_permintaan($id_permintaan){
    $this->db->where('id_permintaan', $id_permintaan);
    return $this->db->get('history_Permintaan');
  }


  public function notifikasi_permintaan(){
    $this->db->select('*');
    $this->db->from('notifikasi');
    $this->db->or_where_in('status', "7");
    $this->db->or_where_in('status', "2");
    $this->db->or_where_in('status', "5");
    $this->db->or_where_in('status', "4");
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




  // barang

  public function jumlah_barang($id_barang){
    $array = array('id_barang' => $id_barang, 'status' => "0");
    return $this->db->where($array)->from("barang_detail")->count_all_results();
  }

  public function jumlah_barang_gudang($id_barang){
    $array = array('id_barang' => $id_barang, 'status' => "3");
    return $this->db->where($array)->from("barang_detail")->count_all_results();
  }

  public function detail_jenis($id_barang){
    $this->db->or_where_in('id_barang', $id_barang);
    return $this->db->get('barang');
  }

  public function data_barang_detail($id_barang){
    $this->db->select('barang_detail.id_barang_detail, barang_detail.id_permintaan, barang_detail.tgl_kapal, barang_detail.status as status_det,barang.*');
    $this->db->from('barang_detail');
    $this->db->join('barang', 'barang_detail.id_barang = barang.id_barang', 'inner');
    $this->db->where('barang.id_barang', $id_barang);
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

}


 ?>
