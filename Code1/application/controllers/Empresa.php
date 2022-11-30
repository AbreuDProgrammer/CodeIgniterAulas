<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empresa extends my_controller {

	public function index()
	{
		$this->setTitle('Empresa');

		$data = array('description' => 'Description home page');
		$this->setData($data);

		$data_footer = array('criador' => 'Leonardo');
		$this->setFooterData($data_footer);

		$css_files = array(
			'home' => 'home'
		);
		$this->setCssFiles($css_files);
		
		$js_files = array(
			'js' => 'home'
		);
		$this->setJsFiles($js_files);

		$this->load_views('home');
	}
}