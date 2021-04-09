<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info_kab extends CI_Controller {
	
	function __construct(){
		parent:: __construct();
		$this->load->model('m_ikab');

	}

	public function info()
	{
		$id = $this->uri->segment(3);
		$data['kab_smg'] = $this->m_ikab->GetDkab($id);
		$this->template->load('static','info_kab', $data);
	}

}