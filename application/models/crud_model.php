<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class crud_model extends CI_Model {
  public function get_user_by_Id($id) {
    return $this->db->query("SELECT * from user where id = '$id'")->result();
  }
  public function update($table,$data,$id) {
		$this->db->where('id', $id);
    return $this->db->update($table, $data);
	}

  public function delete_data($id){
  $this->db->where('id', $id);
  return $this->db->delete('user');
}
}
