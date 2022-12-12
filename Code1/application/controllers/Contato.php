<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends My_controller 
{

	public function construtor(): void
	{
		$this->load->library('session');
	}

	public function index()
	{
		$this->form_validator->set_rules('nome', 'Nome', 'required|min_length[3]');
		$this->form_validator->set_rules('telefone', 'Telefone', 'required|numeric');

		$this->form_validator->run() == FALSE ? $data['formErrors'] = validation_errors() : null;
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

	public function complexo()
	{
		/**
		 * Após a submição de um formulario as mensagens geradas são apenas temporarias
		 * 
		 * Para tornar qualquer informação permanente devemos usar a library Session, nativa do CI
		 * 
		 * Sessions do tipo flashdata-> representam carregamento por impulso, isto é, 
		 * ao mudar de pagina ou recarregando a pagina automaticamente são excluidas de memoria
		 */

		$this->form_validator->set_rules('nome', 'Nome', 'required|min_length[3]');
		$this->form_validator->set_rules('telefone', 'Telefone', 'required|numeric');

		if($this->form_validator->run() == FALSE)
		{
			$data['formErrors'] = validation_errors();
		}
		else
		{
			$this->session->set_flashdata('success_msg', 'Contato processado com sucesso!');
			$data['formErrors'] = null;
		}
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