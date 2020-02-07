<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Detail extends CI_Controller{

  public function __construct(){
    parent::__construct();
    $this->load->model("M_PPOB");
  }

  public function bpjs_kesehatan(){
    $result = $this->M_PPOB->inquiry();
    $this->session->inquiry = $result;
    $data['detail'] = $result;

    $this->load->view('detail/v_bpjs_kesehatan', $data);
  }

  public function pln_postpaid(){
    $result = $this->M_PPOB->inquiry();
    $this->session->inquiry = $result;
    $data['detail'] = $result;

    $this->load->view('detail/v_pln_postpaid', $data);
  }

  public function pln_prepaid(){
    $result = $this->M_PPOB->inquiry();
    $this->session->inquiry = $result;
    $data['detail'] = $result;
    if ($result->responcode == "00") {
      $data['denom'] = $this->getDenomNominal($result->denom);
      $data['denom_value'] = $this->getDenomValue($result->denom);
    }

    $this->load->view('detail/v_pln_prepaid', $data);
  }

  public function telkomsel_pulsa(){
    $this->load->view('detail/v_bpjs_kesehatan');
  }

  public function telkomsel_pascabayar(){
    $this->load->view('detail/v_bpjs_kesehatan');
  }

  private function list(){
    $this->session->saldo = $this->M_PPOB->cekSaldo();
    $data['data_tagihan'] = $this->session->cart;
    // $this->load->view('detail/v_tagihan_all', $data);
    print_r($data['data_tagihan'] );
  }

  private function getDenomNominal($string){
    $string = substr($string, 0, -1);
    $string = str_replace("[", "", $string);
    $result = explode("]", $string);
    return $result;
  }

  private function getDenomValue($string){
    $string = substr($string, 0, -1);
    $string = str_replace(".", "", $string);
    $string = str_replace("[", "", $string);
    $result = explode("]", $string);
    return $result;
  }

}
