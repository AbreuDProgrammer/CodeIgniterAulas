<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contatos_Model extends My_model
{
	public function constructor(): void
	{
		$this->load->model('contatos_model');
	}

	public function Modelar($contatos)
	{
		if(!$contatos)
			return false;

		for($i = 0; $i < count($contatos); $i++){
			$contatos[$i]['edit_url'] = base_url('edit/'.$contatos[$i]['id']);
			$contatos[$i]['del_url'] = base_url('delete/'.$contatos[$i]['id']);
		}
		return $contatos;
	}

	public function get_all_contatos(Array|String $where): Array|Null
	{
		$query = $this->select('contatos', $where);
		return $query;
	}
}