<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class address_model extends CI_Model{

	
	public function display_address(){
		$query=$this->db->get('tbladdress');
		return $query->result();
	}
	public function insert($data){
		$this->db->insert('tbladdress',$data);
	}


	public function delete($id){
		$this->db->where('tbladdress.addid',$id);
		return $this->db->delete('tbladdress');
	}

	public function get_single_address($id){
		$query=$this->db->get_where('tbladdress',array('addid'=>$id));
		return $query->row_array();
	}


	public function update_address($data,$id){
		$this->db->where('tbladdress.addid',$id);
		$this->db->update('tbladdress',$data);
	}
}
?>