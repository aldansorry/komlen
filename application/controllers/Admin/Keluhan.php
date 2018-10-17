<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keluhan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Keluhan_model');
		if($this->session->userdata('logged_in') == null){
			redirect('Login','refresh');
		}
	}
	public function index()
	{
		$data['data'] = $this->Keluhan_model->get();
		$this->load->view('admin/header');
		$this->load->view('admin/keluhan/keluhan',$data);
		$this->load->view('admin/footer');
	}
	public function insert()
	{
		$this->form_validation->set_rules('kode','Kode',"required|alpha|trim");
		$this->form_validation->set_rules('tanggal','Tanggal',"required|trim");
		$this->form_validation->set_rules('judul','Judul',"required|alpha");
		$this->form_validation->set_rules('keluhan','Keluhan',"required");
		$this->form_validation->set_rules('solusi','Solusi',"required");
		$this->form_validation->set_rules('status','Status',"required");
		$this->form_validation->set_rules('fk_mahasiswa','Mahasiswa',"required");
		$this->form_validation->set_rules('fk_lingkup_keluhan','LingkupKeluhan',"required");
		$this->form_validation->set_rules('fk_unit_kerja','UnitKerja',"required");
		
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/header');
			$this->load->view('admin/keluhan/insert');
			$this->load->view('admin/footer');
		} else {
			$this->Keluhan_model->insert();
			redirect('Admin/Keluhan','refresh');
		}
	}
	public function update($id)
	{
		$this->form_validation->set_rules('kode','Nama',"required|alpha|trim");
		$this->form_validation->set_rules('tanggal','Alamat',"required|numeric|trim");
		$this->form_validation->set_rules('judul','Judul',"required|alpha|");
		$this->form_validation->set_rules('keluhan','Keluhan',"required");
		$this->form_validation->set_rules('solusi','Solusi',"required");
		$this->form_validation->set_rules('status','Status',"required");
		$this->form_validation->set_rules('fk_mahasiswa','Mahasiswa',"required");
		$this->form_validation->set_rules('fk_lingkup_keluhan','LingkupKeluhan',"required");
		$this->form_validation->set_rules('fk_unit_kerja','UnitKerja',"required");
		
		if ($this->form_validation->run() == FALSE) {
			$data['keluhan'] = $this->Keluhan_model->get_id($id);
			$this->load->view('admin/header');
			$this->load->view('admin/keluhan/update',$data);
			$this->load->view('admin/footer');
		} else {
			$this->Keluhan_model->update($id);
			redirect('Admin/Keluhan','refresh');
		}
	}
	public function delete($id)
	{
		$this->Keluhan_model->delete($id);
		redirect('Admin/Keluhan','refresh');
	}
}
