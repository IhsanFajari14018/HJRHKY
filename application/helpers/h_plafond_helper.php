<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function get_type($type){
  if ($type == '1') {
    return "<span class='bg-success p-1'>Rawat Jalan</span>";
  }else{
    return "<span class='bg-indigo p-1'>Rawat Inap</span>";
  }
}

 ?>
