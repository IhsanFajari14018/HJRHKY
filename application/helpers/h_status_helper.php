<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function status_plafond($code){
  if ($type == '1') {
    return "<span class='bg-success p-1'>Active</span>";
  }else{
    return "<span class='bg-indigo p-1'>Inactive</span>";
  }
}

function status_is_disabled($status){
  if ($status == '0000-00-00 00:00:00') {
    return "<span class='bg-success px-2 py-1'>Active</span>";
  }else{
    return "<span class='bg-indigo px-2 py-1'>Inactive</span>";
  }
}

function status_reimburse($code){
  switch ($code) {
    case "0":
    return "<span class='bg-secondary px-2 py-1'>Waiting</span>";
    break;
    case "1":
    return "<span class='bg-warning px-2 py-1'>Processed</span>";
    break;
    case "2":
    return "<span class='bg-success px-2 py-1'>Accepted</span>";
    break;
    case "3":
    return "<span class='bg-danger px-2 py-1'>Decline</span>";
    break;
    default:
    return "<span class='bg-pink px-2 py-1'>Error</span>";
  }
}

?>
