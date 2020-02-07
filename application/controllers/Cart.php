<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cart extends CI_Controller{

  public function __construct(){
    parent::__construct();
    $this->load->model("M_PPOB");
  }

  /*
  * Display list of bill to paid
  */
  public function index(){
    $this->session->saldo = $this->M_PPOB->cekSaldo();
    $data['data_tagihan'] = $this->session->cart;
    $this->load->view('detail/v_tagihan_all', $data);
  }

  /*
  * Add bill to cart, to be paid later.
  */
  public function add_to_cart(){
    $detail = $this->session->inquiry;

    $productcode  = $detail->productcode;
    $subid        = $detail->subid;
    if ($productcode == "bpjskes") {
      $jml        = $detail->jmltotalbayar;
    }else if($productcode == "plnprepaid"){
      $post = $this->input->post();
      $jml        = $post['denom'] + $detail->admin;
    }else if($productcode == "plnpostpaid"){
      $jml        = $detail->totalbayar;
    }
    $subname      = $detail->subname;
    $jmlBln       = $detail->jumlahbulan;

    $result = $this->do_add_to_cart($productcode, $subid, $jml, $subname, $jmlBln);
    if ($result) {
      echo "Sukses";
      $this->session->set_flashdata('cart_ppob', 'Tagihan '.$subname.' berhasil dimasukan kedalam keranjang.');
    }else{
      echo "Gagal";
      $this->session->set_flashdata('cart_ppob', 'Gagal memasukan tagihan. Tagihan '.$subname.' sudah ada didalam keranjang.');
    }

    redirect(site_url());
  }

  private function do_add_to_cart($productcode, $subid, $jml, $subname, $jmlBln){
    $data = (object) array(
      'subid'         => $subid,
      'jmltotalbayar' => $jml,
      'subname'       => $subname,
      'productcode'   => $productcode,
      'jmlBln'        => $jmlBln
    );

    //goes here, mean session already created, and the cart has item
    if (isset($this->session->cart)) {

      $exist = $this->check_cart($subid);
      if ($exist) {
        return FALSE; //mean the cart contain same inquiry
      }

      //get current array to be update
      $array = $this->session->cart;
      array_push($array, $data);

      //update
      $this->session->cart = $array;
      return TRUE;

    }else{ //no session has been made

      $this->session->cart = array();
      $array = $this->session->cart;
      array_push($array, $data);

      //update
      $this->session->cart = $array;
      return TRUE;
    }

  }

  /*
  * check wether the cart has current inquiry
  */
  private function check_cart($subid){
    $cart = $this->session->cart;
    foreach ($cart as $c) {
      if ($c->subid == $subid) {
        return TRUE; //true dat $va is exist / cart will be duplicate if added
      }
    }
    return FALSE;
  }


  /*
  * Drop bill from cart
  */
  public function drop($id){
    for ($i=0; $i < count($this->session->cart); $i++) {
      $bill = $this->session->cart[$i];
      if ($bill->subid == $id){
        $key = $i;
        unset($_SESSION['cart'][$key]); //done removing
      }
    }

    $this->rewrite_cart(); //rearrange object
    redirect('cart');
  }

  /*
  * Rearrange array of object, if not it will cause error
  * because of the jumping index from unset
  */
  private function rewrite_cart(){
    $new = array();
    foreach ($this->session->cart as $bill) {
      array_push($new, $bill);
    }
    $this->session->cart = $new;
  }

}
