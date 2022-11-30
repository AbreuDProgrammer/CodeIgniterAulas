<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

// Classe Main Controller para ser herdada por todos os controladores
// com funções padronizadas e úteis
abstract class my_controller extends CI_Controller {

	// Variavel de strings keys necessarias para o carregamento de qualquer pagina
	private array $data_needed_header = array('title');
	private array $data_needed_nav = array();
	private array $data_needed_footer = array('criador');

	// Variavel que verifica se a pagina tem menu abilitado
	private bool $load_nav = FALSE;

	// Variaveis arrays associativos para usar nas diferentes views
	private $data_header = array();
	private $data_nav = array();
	private $data_body = array();
	private $data_footer = array();

	// Configs para paths
	private $includes_path = 'comuns';
	private $include_header = 'header';
	private $include_nav = 'menu';
	private $include_footer = 'footer';

	private $assets_path = 'assets';
	private $css_path = 'css';
	private $js_path = 'js';
	private $main_css_path = 'mainStyle';
	private $nav_css_path = 'navStyle';

	//! Contrutor que carrega as funcionalidades de urls e adiciona um css padrão a todas as paginas
	public function __construct()
	{
		// Chama o construtor do CI_Controller
		parent::__construct();

		// Instancia as funcionalidades de ancoras
		$this->load->helper('url');

		// Define os ficheiros de css main do site
		$this->setMainCssFile();
	}

	//* Funcionalidade que carrega as views padrões em todas as paginas mais a view do path passado
	//* as variaveis usadas nas views são carregadas por meio de funcionalidades
	protected function load_views($path, $return = FALSE)
	{
		$this->verify_datas();

		$this->load->view($this->includes_path.'/'.$this->include_header, $this->data_header);

		if($this->load_nav)
			$this->load->view($this->includes_path.'/'.$this->include_nav, $this->data_menu);

		$this->load->view($path, $this->data_body, $return);

		$this->load->view($this->includes_path.'/'.$this->include_footer, $this->data_footer);
	}

	//* Funcionalidade que define o titulo da pagina
	protected function setTitle($title = 'Undefined title')
	{
		$this->data_header['title'] = $title;
	}

	//* Adiciona ficheiros de css ao header
	protected function setCssFiles($array)
	{
		foreach($array as $key => $path){
			$this->data_header['css'][$key] = base_url($this->assets_path.'/'.$this->css_path.'/'.$path.'.css');
		}
	}

	//* Adiciona um ficheiro de js ao header
	protected function setJsFiles($array)
	{
		foreach($array as $key => $path){
			$this->data_header['js'][$key] = base_url($this->assets_path.'/'.$this->js_path.'/'.$path.'.js');
		}
	}

	//* Funcionalidade que organiza tudo para que o menu seja abilitado
	protected function setMenu()
	{
		$this->load_nav = TRUE;
		$this->setNavCssFile();
	}

	//* Funcionalidade que define alguma data qualquer da pagina
	protected function setData($array)
	{
		if(!$array)
			return;

		foreach($array as $key => $value){
			$this->data_body[$key] = $value;
		}
	}

	//* Funcionalidade que define alguma data qualquer do footer
	protected function setFooterData($array)
	{
		if(!$array)
			return;

		foreach($array as $key => $value){
			$this->data_footer[$key] = $value;
		}
	}

	//* Funcionalidade que define alguma data qualquer do header
	protected function setHeaderData($array)
	{
		if(!$array)
			return;

		foreach($array as $key => $value){
			$this->data_header[$key] = $value;
		}
	}

	//* Funcionalidade que verifica se todas as datas necessárias foram preenchidas no header e no footer
	//* e se não foram preenche com undefined
	private function verify_datas()
	{
		for($i = 0; $i < count($this->data_needed_header); $i++){
			$key = $this->data_needed_header[$i];
			if(!isset($this->data_header[$key])){
				$this->data_header[$key] = 'Undefined';
			}
		}
		for($i = 0; $i < count($this->data_needed_footer); $i++){
			$key = $this->data_needed_footer[$i];
			if(!isset($this->data_footer[$key])){
				$this->data_footer[$key] = 'Undefined';
			}
		}
	}

	//! Define o ficheiro de css main do site
	private function setMainCssFile()
	{
		$this->data_header['css']['main'] = base_url($this->assets_path.'/'.$this->css_path.'/'.$this->main_css_path.'.css');
	}

	//! Define o css do nav
	private function setNavCssFile()
	{
		$this->data_header['css']['menu'] = base_url($this->assets_path.'/'.$this->css_path.'/'.$this->nav_css_path.'.css');
	}
}