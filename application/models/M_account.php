<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_account extends CI_Model{

  public function get_all(){
    $this->db->where("disabled_on < created_on");//cari yang tidak disable
    return $this->db->get("Account")->result();
  }

  /*
  * get User without admin/role =1,2,3
  */
  public function get_not_admin(){
    $this->db->where("disabled_on < created_on");//cari yang tidak disable
    $this->db->where("role",0);
    return $this->db->get("Account")->result();
  }

  public function get_by_id(){
    return $this->db->get_where("Account", ["id" => $id])->row();
  }

  public function add(){
    $post = $this->input->post();
    $this->name = $post["name"];
    $this->email = $post["email"];
    $this->password = $post["password"];
    $this->role = $post["role"];
    // date_default_timezone_set('Asia/Jakarta');
    // $this->created_on = date("Y-m-d H:i:s");
    // $this->disabled_on = "0000-00-00 00:00:00";
    $this->db->insert("Account", $this);
  }

  public function edit($id){
    $post = $this->input->post();
    $this->name = $post["name"];
    $this->email = $post["email"];
    $this->password = $post["password"];
    $this->role = $post["role"];
    $this->db->update("Account", $this, array('id' => $id));
  }

  public function disable($id){
    $date = date("Y-m-d H:i:s");//inisialisasi CURRENT_TIME php sesuai format MySQL
    $this->db->set('disabled_on',$date);
    $this->db->where('id',$id);
    $this->db->update("Account");
  }

  public function enable($id){
    $this->db->set('disabled_on','0000-00-00 00:00:00');//merubah disable_on menjadi 0
    $this->db->where('id',$id);
    $this->db->update("Account");
  }

  public function validate_login(){
    $post = $this->input->post();
    $this->db->where('email', $post['email']);
    $this->db->where('password', $post['password']);
    return $this->db->get("Account")->row();
  }

  public function delete($id){
    return $this->db->delete("Account", array("id" => $id));
  }
}
