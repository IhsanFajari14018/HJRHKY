<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller{

  public function __construct(){
    parent::__construct();
    $this->load->model("M_PPOB");
    // $this->load->helper("h_status_helper");
  }

  public function index(){
    $this->session->saldo = $this->M_PPOB->cekSaldo();
    $this->load->view('v_home');
  }

  public function print(){
    echo "Hello Ihsan!";
  }

}
