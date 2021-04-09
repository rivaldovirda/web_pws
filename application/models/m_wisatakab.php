<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_wisatakab extends CI_Model {

	public function GetData()
	{
		$blog = $this->db->query('SELECT * FROM kab_smg;');
		return $blog;
	}
}
