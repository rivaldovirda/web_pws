<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wisatakab_smg extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
		$this->load->model('m_wisatakab');
	}

	public function index()
	{
		$data['kab_smg'] = $this->m_wisatakab->GetData();
		$this->template->load('static','kab_smg', $data);
	}
}