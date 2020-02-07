<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Debugging extends CI_Controller {

  public function __construct() {
    parent::__construct();
    // $this->load->model("M_plafond_type");
  }

  public function profile(){
    print_r($this->session->user);
  }

  public function print(){
    echo "Hello Ihsan!";
  }

  public function get_detail(){
    print_r($this->session->inquiry);
  }

  public function get_cart(){
    print_r($this->session->cart);
    echo "<br>";
    for ($i=0; $i < count($this->session->cart); $i++) {
      echo $this->session->cart[$i]['subid']."<br>";
    }
  }

  public function get_cart_object(){
    $object = $this->session->cart;
    print_r($object);
  }

  public function remove_session(){
    $this->session->unset_userdata('cart');
    print_r($this->session->cart);
  }

  public function array_of_object(){
    $data = (object) array(
      'subid'         => "0001260835569",
      'jmltotalbayar' => "206500",
      'subname'       => "SHAHNAAZ",
      'productcode'   => "bpjskes"
    );

    $data2 = (object) array(
      'subid'         => "0001260121569",
      'jmltotalbayar' => "170500",
      'subname'       => "JAJAZ",
      'productcode'   => "bpjskes"
    );

    $all = array();
    array_push($all, $data);
    array_push($all, $data2);

    print_r($all);
  }

  public function api(){
    $this->load->model("M_API_Debugging");
    $result = $this->M_API_Debugging->test();
    print_r($result);
  }

  public function encode(){
    // $object = array (
    //   "kodeTrx"         => "payment",
    //   "jumlahbulan"     => "01",
    //   "productcode"     => "bpjskes",
    //   "sisasebelumnya"  => "0",
    //   "referensi"       => "2B2AED4146A47308",
    //   "jmltotalbayar"   => "206500",
    //   "saldobalance"    => "1.091.175",
    //   "responcode"      => "00",
    //   "subname"         => "AKMA",
    //   "kodeAgent"       => "TES8888",
    //   "jumlahpeserta"   => "02",
    //   "jmltagih"        => "204000",
    //   "subid"           => "0001260858576",
    //   "adminbank"       => "2500",
    //   "tglbayar"        => "2020-01-09 10:59:47"
    // );

    $object = array(
      "kodeTrx"       => "payment",
      "productcode"   => "plnpostpaid",
      "saldobalance"  => "782.815",
      "Footer1"       => "Terima Kasih",
      "responcode"    => "00",
      "subname"       => "GSP-DU''MMY-MQBKMLZ2WRV04",
      "Footer2"       => "Rincian tagihan dapat diakses di www.pln.co.id atau PLN terdekat 123456789ABCDEF",
      "billperiode"   => "202001,202001",
      "admin"         => "2200",
      "jmlbln"        => "1",
      "rptagpln"      => "76635",
      "subid"         => "532110000011",
      "Stand"         => "8888-8899",
      "totalbayar"    => "78835",
      "tarifdaya"     => "R1/VA",
      "KodeReff"      => "0SMT21G509840024446"
    );

    echo json_encode($object);
  }

  public function get_transaction($id){
    $this->load->model("M_transaction");
    $result = $this->M_transaction->get($id);

    print_r($result);
    echo "<br>";
    echo "<br>";
    echo "<br>";
    print_r($result->value);
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "DECODE: <br>";
    $decoded_result = $result->value;
    print_r(json_decode($decoded_result));
  }

}
