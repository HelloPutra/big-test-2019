<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mo_pengunjung extends CI_Model {

	function get_all() { 
	    $this->db->from('tb_user');
	    $this->db->where('role','pengunjung');
		return $this->db->get();
	}

}