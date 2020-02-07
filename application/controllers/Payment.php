<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Payment extends CI_Controller{

  public function __construct(){
    parent::__construct();
    $this->load->model("M_PPOB");
    $this->load->model("M_transaction");

    // update saldo to be used by navbar
    $this->session->saldo = $this->M_PPOB->cekSaldo();
  }

  // public function index(){
  //   $this->load->view('detail/v_pembayaran');
  // }


 // ======================= LIST OF PAYMENT METHOD ============================

  public function saldo(){
    //check if the user is already logged in or not
    if (!$this->session->user) {
      echo "I'M HACKER!";
    }else{
      $this->M_PPOB->multiplePayment();
      $this->reset_cart(); //reseting the cart
      redirect('payment/log');
    }
  }

  // ==========================================================================


  public function log(){
    $id = $this->session->user['kodeAgent'];
    $data['data_transaksi'] = $this->M_transaction->get_by_agent($id);
    $this->load->view('user/v_log_transaksi', $data);
    // print_r($data);
  }

  private function reset_cart(){
    $this->session->cart = NULL;
  }

}
