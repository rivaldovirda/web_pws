<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kota extends CI_Controller {

	public function __construct()
	{	
		parent::__construct();
		$this->load->model('kota_model');
	}

	public function tampil_kota()
	{
		$data['kota_smg'] = $this->kota_model->selectAll();
		$this->load->view('admin/static',$data);
		$this->load->view('kota_smg/display_kota',$data);
	}

	public function tambah_data()
	{
		$this->load->view('admin/static');
		$this->load->view('kota_smg/add_kota');
	}

	public function insert()
	{
		$this->form_validation->set_rules('nama_tempat', 'Nama Tempat', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('maps', 'Maps', 'required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
		$this->form_validation->set_rules('telp', 'Telp', 'required');
		$this->form_validation->set_rules('jam', 'Jam Operasional', 'required');
		$this->form_validation->set_rules('tiket', 'Tiket', 'required');
		$this->form_validation->set_rules('foto_utama', 'Foto Utama', 'required');
		$this->form_validation->set_rules('foto1', 'Foto 1', 'required');
		$this->form_validation->set_rules('foto2', 'Foto 2', 'required');
		$this->form_validation->set_rules('foto3', 'Foto 3', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/static');
			$this->load->view('kota_smg/add_kota');
		}
		else
		{
			$nama_tempat = $this->input->post('nama_tempat');
			$alamat = $this->input->post('alamat');
			$maps = $this->input->post('maps');
			$deskripsi = $this->input->post('deskripsi');
			$telp = $this->input->post('telp');
			$jam = $this->input->post('jam');
			$tiket = $this->input->post('tiket');
			$gambar = $this->input->post('foto_utama');
			$foto1 = $this->input->post('foto1');
			$foto2 = $this->input->post('foto2');
			$foto3 = $this->input->post('foto3');

			$object = array(
					'nama_tempat' => $nama_tempat,
					'alamat' => $alamat,
					'maps' => $maps,
					'deskripsi' => $deskripsi,
					'telp' => $telp,
					'jam' => $jam,
					'tiket' => $tiket,
					'foto_utama' => $gambar,
					'foto1' => $foto1,
					'foto2' => $foto2,
					'foto3' => $foto3
				);

			$query = $this->kota_model->insert_data($object);

			if ($query) {
				$this->session->set_flashdata('info', 'berhasil ditambahkan');
				redirect('kota/tampil_kota');
			}
		}
	}

	public function hapus_kota($id)
	{
		$hapus = $this->kota_model->delete_data('kota_smg',$id);
		if ($hapus) {
				$this->session->set_flashdata('info', 'berhasil dihapus');
				redirect('kota/tampil_kota');
			}

	}

	public function edit_kota($id)
	{
		$this->load->view('admin/static');
		$this->data['dataEdit'] = $this->kota_model->dataEdit('kota_smg',$id);
		$this->load->view('kota_smg/edit_kota', $this->data);

	}

	public function update($id){
		$nama_tempat = $_POST['nama_tempat'];
		$alamat = $_POST['alamat'];
		$maps = $_POST['maps'];
		$deskripsi = $_POST['deskripsi'];
		$telp = $_POST['telp'];
		$jam = $_POST['jam'];
		$tiket = $_POST['tiket'];
		$gambar = $_POST['foto_utama'];
		$foto1 = $_POST['foto1'];
		$foto2 = $_POST['foto2'];
		$foto3 = $_POST['foto3'];

		$data = array('nama_tempat' => $nama_tempat, 'alamat' => $alamat, 'maps' => $maps, 'deskripsi' => $deskripsi, 'telp' => $telp, 'jam' => $jam, 'tiket' => $tiket, 'foto_utama' => $gambar, 'foto1' => $foto1, 'foto2' => $foto2, 'foto3' => $foto3);
		$ubah = $this->kota_model->editData('kota_smg', $data, $id);

		if ($ubah) {
			$this->session->set_flashdata('info', 'berhasil diubah');
			redirect('kota/tampil_kota');
		}else{
			$this->session->set_flashdata('info', 'gagal diubah');
			redirect('kota/tampil_kota');
		}
	}

}