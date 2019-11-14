<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mo_surveyor extends CI_Model {

	function get_all() { 
	    $this->db->from('tb_user');
	    $this->db->where('role','surveyor');
		return $this->db->get();
	}

}