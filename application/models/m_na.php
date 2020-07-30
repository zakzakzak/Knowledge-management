<?php

class M_na extends CI_Model{

  // permintaan
  public function data_permintaan($id){
    $this->db->or_where_in('status', $id);
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
    $this->db->or_where_in('status', "0");
    $this->db->or_where_in('status', "3");
    $this->db->or_where_in('status', "4");
    $this->db->or_where_in('status', "7");
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


  public function data_barang_rusak(){
    $this->db->select('barang_detail.*, barang.*');
    $this->db->from('barang_detail');
    $this->db->join('barang', 'barang_detail.id_barang = barang.id_barang', 'inner');
    $this->db->or_where_in('barang_detail.status', "1");
    $this->db->or_where_in('barang_detail.status', "2");
    $this->db->or_where_in('barang_detail.status', "3");
    return $this->db->get();
  }

  public function barang_permintaan2($id_permintaan){
    $this->db->select('*');
    $this->db->from('barang_permintaan');
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

}


 ?>
