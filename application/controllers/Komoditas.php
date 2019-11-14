<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komoditas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		date_default_timezone_get('Asia/Jakarta');
		$this->load->model('Mo_komoditas','komoditas');
	}

	public function index()
	{
		$data['data'] = $this->komoditas->get_all()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('templates/sidebar');
		$this->load->view('komoditas/komoditas_view', $data);
		$this->load->view('templates/footer');
	}

	public function add()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('templates/sidebar');
		$this->load->view('komoditas/komoditas_add');
		$this->load->view('templates/footer');
	}

	public function do_add()
	{
		$id_pengelola	= $this->session->userdata('id');
		$id_konfirmasi	= $this->session->userdata('id');
		$nama 			= $this->input->post('nama');
		$satuan 		= $this->input->post('satuan');
		$harga 			= $this->input->post('harga');
		$tanggal		= date("Y-m-d");
		$konfirmasi		= 'WAIT';
 
		$data = array(
			'id_pengelola' 		=> $id_pengelola,
			'id_konfirmasi' 	=> $id_konfirmasi,
			'nama_komoditas' 	=> $nama,
			'satuan' 			=> $satuan,
			'harga' 			=> $harga,
			'tanggal' 			=> $tanggal,
			'konfirmasi' 		=> $konfirmasi
		);
		$this->komoditas->input_data($data);
		redirect(base_url('komoditas'));

	}

	public function edit($id)
	{
		
	}

	public function delete($id)
	{
		
	}

}
