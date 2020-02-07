<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_PPOB extends CI_Model {

  private $url_bpjs          = 'http://1.1.1.116:2401';
  private $url_pln_postpaid  = 'http://1.1.1.116:2402';
  private $url_pln_prepaid   = 'http://1.1.1.116:2403';

  /*
  * Retrieve the bill's detail information through API
  */
  public function inquiry(){
    set_time_limit(30);
    $post = $this->input->post();
    $product = $post['product'];

    //create a new cURL resource
    $url = $this->chooseURL($product);

    //setup request to send json via POST
    $data = $this->bodyInquiryAPI($product);

    //execute data to the url
    $result = $this->callAPI($url, $data, "decode");
    // $result = $this->dummy_inquiry();

    return $result;
  }

  /*
  * Set the data for API
  */
  private function bodyInquiryAPI($product){
    $post = $this->input->post();

    if ($product == "BPJSKES") {
      $data = array(
        "productcode"	=> $product,
        "subid"				=> $post['id'],
        "pin"					=> "12345",
        "kodeReff"    => "752244",
        "kodeAgent"		=> "TES8888",
        "userAgent"		=> "081239852185",
        "passAgent"		=> "dc796ffdb94337b1b76087ded630ada2e7a02acd",
        "kodeTrx"			=> "inquiry",
        "jmlBln"      => $post['jmlbln']
      );
    }else if ($product == "plnpostpaid"){
      $data = array(
        "productcode"	=> $product,
        "subid"				=> $post['no_meter'],
        "pin"					=> "12345",
        "kodeReff"    => "752244",
        "kodeAgent"		=> "TES8888",
        "userAgent"		=> "081239852185",
        "passAgent"		=> "dc796ffdb94337b1b76087ded630ada2e7a02acd",
        "kodeTrx"			=> "inquiry"
      );
    }else if ($product == "plnprepaid"){
      $data = array(
        "productcode"	=> $product,
        "subid"				=> $post['no_meter'],
        "pin"					=> "12345",
        "kodeReff"    => "752244",
        "kodeAgent"		=> "TES8888",
        "userAgent"		=> "081239852185",
        "passAgent"		=> "dc796ffdb94337b1b76087ded630ada2e7a02acd",
        "kodeTrx"			=> "inquiry"
      );
    }else{
      return NULL;
    }

    return $data;
  }

  /*
  * Method to process multiple payment
  */
  public function multiplePayment(){
    $ppob = $this->session->cart;

    foreach ($ppob as $pp) {
      $denom = $this->isPLNPrepaid($pp); //only for PLN prepaid case
      $kodeReff = "752244";
      $bon = $this->getPayment($pp->productcode, $pp->subid, $kodeReff, $pp->jmlBln, $denom);
      // $bon = $this->dummy_response();

      // NEW PAYMENT
      $this->saveInvoiceToDB($bon, $pp->productcode);

      // debug:
      // print_r($pp);
    }
  }

  /*
  * Special verification if it is PLN Prepair or not, because it has denom parameter
  */
  private function isPLNPrepaid($pp){
    if ($pp->productcode == "plnprepaid") {
      return $pp->jmltotalbayar;
    }else{
      return NULL;
    }
  }

  /*
  * API Method to process payment
  */
  private function getPayment($productCode, $va, $kodeReff, $nMonth = null, $denom = null){

    if (empty($denom)) {
      // BPJS or PLN Postpaid
      $data = array(
        "productcode"	=> $productCode,
        "subid"				=> $va,
        "pin"					=> "12345",
        "kodeReff"    => $kodeReff,
        "kodeAgent"		=> "TES8888",
        "userAgent"		=> "081239852185",
        "passAgent"		=> "dc796ffdb94337b1b76087ded630ada2e7a02acd",
        "kodeTrx"			=> "payment",
        "jmlBln"			=> $nMonth
      );
    }else{
      // PLN Prepaid
      $data = array(
        "productcode"	=> $productCode,
        "subid"				=> $va,
        "pin"					=> "12345",
        "kodeReff"    => $kodeReff,
        "kodeAgent"		=> "TES8888",
        "userAgent"		=> "081239852185",
        "passAgent"		=> "dc796ffdb94337b1b76087ded630ada2e7a02acd",
        "kodeTrx"			=> "payment",
        "denom"			  => $denom."" //must string
      );
    }

    $url = $this->chooseURL($productCode);

    return $this->callAPI($url, $data, "null"); //need plain text json response
  }

  /*
  * Method to save invoice to session that is produced from getPayment()
  * THIS $data IS PURELY THE RETURN OF API FOR INVOICE
  */
  private function saveInvoice($data){
    //cek whether this session already exist
    if (isset($this->session->invoice)){
      //get current array to be update
      $array = $this->session->invoice;
      array_push($array, $data);

      //update
      $this->session->invoice = $array;
    }else{
      //because not exist, create session then push directly to it
      $this->session->invoice = array();
      $array = $this->session->invoice;
      array_push($array, $data);

      //update
      $this->session->invoice = $array;
    }
  }

  /*
  * Method to record the Invoice to Database.
  */
  private function saveInvoiceToDB($bon, $product){
    $user = $this->session->user; //from logged in user
    $agen = $user['kodeAgent'];

    $CI = get_instance();
    $CI->load->model("M_transaction");
    $CI->M_transaction->add($agen, $product, $bon);

    // print_r($bon);
    // echo "<br>".$product;
  }

  /*
  * Method to get the current saldo of user
  */
  public function cekSaldo(){
    $data = array(
      "pin"					=> "12345",
      "kodeAgent"		=> "TES8888",
      "userAgent"		=> "081239852185",
      "passAgent"		=> "dc796ffdb94337b1b76087ded630ada2e7a02acd",
      "kodeTrx"			=> "saldo"
    );

    // Disable temporarly because BPJS Services is off.
    return $this->callAPI($this->url_bpjs, $data, "decode");
  }

  /*
  * Method to choose the API URL's
  */
  private function chooseURL($product){
    if ($product == "plnpostpaid") {
      return $this->url_pln_postpaid;
    }else if ($product == "plnprepaid"){
      return $this->url_pln_prepaid;
    }else{
      return $this->url_bpjs;
    }
  }

  /*
  * Method to process API request
  * Return array with stdObject format by decoding json format.
  */
  private function callAPI(string $url, array $data, string $mode){
    //create a new cURL resource
    $ch = curl_init($url);

    //change format to json
    $payload = json_encode($data);

    //attach encoded JSON string to the POST fields
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

    //set the content type to application/json
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

    //return response instead of outputting
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    //execute the POST request
    $result = curl_exec($ch);

    if ($mode == "decode") {
      //change format to stdObject
      $result = json_decode($result);
    }

    return $result;
  }



  // ===================================================================
  // ===================================================================
  // ===================================================================
  // ===================================================================
  // ===================================================================
  // ===================================================================


  private function dummy_inquiry(){
    $string_result =
    '{
      "kodeTrx": "inquiry",
      "jumlahbulan": "01",
      "productcode": "bpjskes",
      "sisasebelumnya": "0",
      "referensi": "079310",
      "kodecabang": null,
      "jmltotalbayar": "106500",
      "saldobalance": "2.000.000",
      "responcode": "00",
      "subname": "ZEAT",
      "kodeAgent": "TES8888",
      "jumlahpeserta": "02",
      "jmltagih": "204000",
      "subid": "0001260836669",
      "namacabang": null,
      "adminbank": "2500"
    }';

    $result = json_decode($string_result);

    return $result;
  }

  private function dummy_response(){
    $result =
    '{
      "kodeTrx":"payment",
      "productcode":"plnpostpaid",
      "saldobalance":"782.815",
      "Footer1":"Terima Kasih",
      "responcode":"00",
      "subname":"GSP-DUMMY-MQBKMLZ2WRV04",
      "Footer2":"Rincian tagihan dapat diakses di www.pln.co.id atau PLN terdekat 123456789ABCDEF",
      "billperiode":"202001,202001",
      "admin":"2200",
      "jmlbln":"1",
      "rptagpln":"76635",
      "subid":"532110000011",
      "Stand":"8888-8899",
      "totalbayar":"78835",
      "tarifdaya":"R1\/VA",
      "KodeReff":"0SMT21G509840024446"
    }';

    // $result = json_decode($result);

    return $result;
  }

}

?>
