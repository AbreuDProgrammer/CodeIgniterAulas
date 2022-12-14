<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base extends My_controller
{
	public function constructor(): void
	{
		$this->load->model('contatos_model');
	}

	public function index()
	{
		$contatos = $this->contatos_model->get_all_contatos('nome');
		$data = array();
		$data['contatos'] = $this->contatos_model->Modelar($contatos);
		$this->set_body_data($data);
		$this->set_footer_data(array('criador' => 'Leonardo'));
		$this->create_site_details('Contatcts page', 'contacts', 'contato');
	}

	public function Save()
	{
		$contatos = $this->contatos_model->get_all_contatos('nome');
		$data = array();
		$data['contatos'] = $this->contatos_model->Modelar($contatos);

		$validacao = self::Validation();
		if($validacao){
			//O Codeigniter consegue controlar os pedidos via metodo POST
			$contato = $this->input->post();
			$this->contatos_model->insert($contato);
		}
	}
}