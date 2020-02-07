<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Authentication extends CI_Controller{

  public function __construct(){
    parent::__construct();
    $this->load->model("M_PPOB");
  }

  public function index(){
    $this->load->view('v_login');
  }

  public function do_login(){
    $data = array(
      "pin"         => "12345",
      "kodeAgent"   => "TES8888",
      "userAgent"   => "081239852185",
      "passAgent"   => "dc796ffdb94337b1b76087ded630ada2e7a02acd",
    );

    $this->session->user = $data;
    $this->session->saldo = $this->M_PPOB->cekSaldo();
    redirect(site_url());
  }

  public function do_logout(){
    $this->session->user = NULL;
    redirect(site_url());
  }

}
