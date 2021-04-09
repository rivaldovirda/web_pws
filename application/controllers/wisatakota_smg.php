<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wisatakota_smg extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
		$this->load->model('m_wisatakota');
	}

	public function index()
	{
		$data['kota_smg'] = $this->m_wisatakota->GetData();
		$this->template->load('static','kota_smg', $data);
	}
}