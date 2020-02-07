<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function format_rupiah($amount){
  $hasil_rupiah = "Rp " . number_format($amount,2,',','.');
  return $hasil_rupiah;
}

?>
