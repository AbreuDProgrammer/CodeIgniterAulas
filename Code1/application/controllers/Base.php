<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base extends My_controller
{

	public function construtor(): void
	{
		$this->load->model('contatos_model');
	}

	public function index()
	{
		
	}
}