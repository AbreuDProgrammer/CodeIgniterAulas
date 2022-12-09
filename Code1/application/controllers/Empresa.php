<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empresa extends My_controller 
{
	public function index()
	{		
		$this->set_nav();
		
		$footer = array(
			'criador' => 'Leonardo'
		);
		$this->set_footer_data($footer);

		$data = array(
			'description' => 'Description home page'
		);
		$this->set_body_data($data, Empresa::BODY_DATA);

		// Define as variaveis usadas no site e cria-o
		$title = 'Empresa';
		$css = array('home');
		$view = 'home';
		$this->create_site_details($title, $css, $view);
	}
}