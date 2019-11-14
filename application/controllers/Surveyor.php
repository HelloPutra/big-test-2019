<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surveyor extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		date_default_timezone_get('Asia/Jakarta');
		$this->load->model('Mo_surveyor','surveyor');
	}

	public function index()
	{
		$data['data'] = $this->surveyor->get_all()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('templates/sidebar');
		$this->load->view('surveyor/surveyor_view', $data);
		$this->load->view('templates/footer');
	}

}
