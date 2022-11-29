<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Raiz extends CI_Controller {

	public function index()
	{
		$data['title'] = "Home Page";
		$data['description'] = "Description home page";
		$data['criador'] = "Leandro";

		$this->load->view('comuns/header', $data);
		$this->load->view('home', $data);
		$this->load->view('comuns/footer', $data);
	}
}