<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends My_controller 
{
	public function index()
	{
		$this->form_validation->set_rules('nome', 'Nome', 'required|min_length[3]');
		$this->form_validation->set_rules('telefone', 'Telefone', 'required|numeric');

		$this->form_validation->run() == FALSE ? $data['formErrors'] = validation_errors() : null;
		$this->set_body_data($data);

		$footer = array(
			'criador' => 'Leonardo'
		);
		$this->set_footer_data($footer);

		$data = array(
			'description' => 'Description home page'
		);
		$this->set_body_data($data);

		$this->create_site_details('Contato', array('home'), 'contato', TRUE);
	}
}