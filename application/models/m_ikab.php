<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_ikab extends CI_Model {
	
	public function GetDkab($id)
	{
		$single = $this->db->select('*')
							->from('kab_smg')
							->where('id', $id)
							->get();
		return $single;
	}

}