<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_API_Debugging extends CI_Model {

  private $url_bpjs          = 'http://1.1.1.116:2401';
  private $url_pln_postpaid  = 'http://1.1.1.116:2402';
  private $url_pln_prepaid   = 'http://1.1.1.116:2403';


  public function test(){
    // $url    = $this->url_bpjs;
    // $url    = $this->url_pln_postpaid;
    $url    = $this->url_pln_prepaid;

    $data   = $this->json_text();
    // $data   = json_encode($data);

    // print_r($data);
    return $this->callAPI($url, $data);
  }

  /*
  * Method to process API request
  * Return array with stdObject format by decoding json format.
  */
  private function callAPI(string $url, array $data){
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

    //change format to stdObject
    $result = json_decode($result);

    return $result;
  }

  // ===================================================================
  // ===================================================================
  // ===================================================================
  // ===================================================================
  // ===================================================================
  // ===================================================================

  /*
  * Change the text freely as u desired.
  */
  private function json_text(){
    $string =
    '
    {
      "productcode":"BPJSKES",
      "subid":"0001260843131",
      "pin":"12345",
      "kodeReff":"752244",
      "kodeAgent":"TES8888",
      "userAgent":"081239852185",
      "passAgent":"dc796ffdb94337b1b76087ded630ada2e7a02acd",
      "kodeTrx":"inquiry",
      "jmlBln":"01"
    }
    ';

    // $result = (array) json_decode($string);
    $result = (array) json_decode($string);

    return $result;
  }

}

?>
