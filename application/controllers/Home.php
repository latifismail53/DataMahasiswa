<?php  defined("BASEPATH") OR exit ("no direct script access allowed");


class Home extends CI_Controller
{
	public function index()
	{
		$data['judul'] = 'Halaman Home';
		$this->load->view('templates/header', $data);
		$this->load->view('home/index');
		$this->load->view('templates/footer');
	}
	
}