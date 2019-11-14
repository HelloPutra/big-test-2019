<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('templates/sidebar');
		$this->load->view('dashboard/index');
		$this->load->view('templates/footer');
	}

	public function do_palindrome()
	{
		$inp = $_POST['juminp'];
		for ($i=1; $i <=$inp; $i++) { 
			$inputArray[$i] = $_POST['huruf'.$i];
		}
		echo "<strong>Input : </strong>";
		for ($i=1; $i <= $inp; $i++) { 
			echo $inputArray[$i];
		}
		echo '<br>';
		echo "<strong>Output : </strong>";
		for ($i=1; $i <= $inp; $i++) { 
			echo $inputArray[$i];
		}
		for($i=$inp - 1; $i >=1; $i--){
			echo $inputArray[$i];
		}
		echo '<br>';
		echo "<a href=".base_url('dashboard/').">Kembali</a>";
	}

}
