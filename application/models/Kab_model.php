<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Kab_model extends CI_Model {

	function selectAll(){
		$query = $this->db->get('kab_smg');
		return $query->result_array();
	}

	function selectKab($id){
		$query = "select * from kab_smg where id = '$id'";
		return $query->result_array();
	}

	public function insert_data($id){
		return $this->db->insert('kab_smg', $id);
	}

	public function delete_data($nm_tbl,$id)
	{
		$this->db->where('id',$id);
		$hapus = $this->db->delete($nm_tbl);
		return $hapus;		
	}

	public function editData($nm_tbl,$data,$id)
	{
		$this->db->where('id', $id);
		$ganti = $this->db->update($nm_tbl, $data);
		return $ganti;
	}

	public function dataEdit($nm_tbl,$id)
	{
		$this->db->where('id',$id);
		$edit = $this->db->get($nm_tbl);
		return $edit->row();
	}

}