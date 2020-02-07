<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_transaction extends CI_Model{

  public function get($id, $kode){
    $this->db->where('kode', $kode);
    $this->db->where('id_transaksi', $id);
    return $this->db->get("transaksi")->row();
  }

  public function get_by_agent($kode){
    $this->db->where('fk_user', $kode);
    $this->db->order_by('created_on', 'DESC');
    return $this->db->get("transaksi")->result();
  }

  public function add($agen, $product, $bon){
    $post = $this->input->post();

    $this->fk_produk  = $product;
    $this->source     = "WEB";
    $this->kode       = $this->generate_kode();
    $this->value      = $bon;
    $this->subid      = $this->get_subid($bon);
    $this->status     = $this->get_status($bon);
    $this->deskripsi  = $this->get_deskripsi($bon);
    date_default_timezone_set("Asia/Jakarta");
    $this->created_on = date("Y-m-d H:i:s");
    $this->fk_user    = $agen;

    $this->db->insert("transaksi", $this);
  }

  private function generate_kode(){
    date_default_timezone_set("Asia/Jakarta");
    $year = date("Y"); //2020
    $year = substr($year, -2); //20
    $date = date("md"); //0109
    $time = date("His"); //131920
    return $year.$date.$time; //200109133720
  }

  private function get_subid($bon){
    $response = json_decode($bon);
    return $response->subid;
  }

  private function get_status($bon){
    $response = json_decode($bon);
    if ($response->responcode != '00') {
      return 0;
    }else{
      return 1;
    }
  }

  private function get_deskripsi($bon){
    $response = json_decode($bon);
    if ($response->responcode != '00') {
      return $response->messagedesc;
    }else{
      return "-";
    }
  }

}
