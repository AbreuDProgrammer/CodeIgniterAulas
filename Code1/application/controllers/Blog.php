<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function exemplo()
	{
		echo "top";
	}

	public function exemploseg($id, $nome)
	{
		echo 'Idade: '.$id;
		echo '<br>';
		echo 'Nome: '.$nome;
	}

	public function ems()
	{
		$d = $this->uri->segment(0);
		$c = $this->uri->segment(1);
		$a = $this->uri->segment(2);
		echo 'Controlador: '.$c;
		echo '<br>';
		echo 'Ação: '.$a;
		echo '<br>';

		$id = $this->uri->segment(3);
		echo 'Id: '.$id;

		echo '<br>';

		$nome = $this->uri->segment(4);
		echo 'Nome: '.$nome;
	}
}
