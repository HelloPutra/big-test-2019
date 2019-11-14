<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mo_komoditas extends CI_Model {

	var $table = 'tb_komoditas';
	var $pk = 'id';

	public function get_all() { 
	    $this->db->from($this->table);
		return $this->db->get();
	}

	public function get_by_id($id)
	{
		$this->db->from($this->table);
		$this->db->where($this->pk, $id);
		$query = $this->db->get();
		return $query->row();
	}

	public function input_data($data){
		$this->db->insert($this->table,$data);
	}

	public function update_data($where,$data){
		$this->db->where($where);
		$this->db->update($this->table,$data);
	}

	public function hapus_data($where){
		$this->db->where($where);
		$this->db->delete($this->table);
	}

}