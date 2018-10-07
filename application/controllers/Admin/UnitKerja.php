<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UnitKerja extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('UnitKerja_model');
	}
	public function index()
	{
		$data['data'] = $this->UnitKerja_model->get();
		$this->load->view('admin/header');
		$this->load->view('admin/unitkerja/unitkerja',$data);
		$this->load->view('admin/footer');
	}
	public function insert()
	{
		$this->form_validation->set_rules('kode','Kode',"required");
		$this->form_validation->set_rules('nama','Nama',"required");

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/header');
			$this->load->view('admin/unitkerja/insert');
			$this->load->view('admin/footer');
		} else {
			$this->UnitKerja_model->insert();
			redirect('Admin/unitkerja','refresh');
		}
	}
	public function update($id)
	{
		$this->form_validation->set_rules('kode','Kode',"required");
		$this->form_validation->set_rules('nama','Nama',"required");
		
		
		if ($this->form_validation->run() == FALSE) {
			$data['unit_kerja'] = $this->UnitKerja_model->get_id($id);
			$this->load->view('admin/header');
			$this->load->view('admin/unitkerja/update',$data);
			$this->load->view('admin/footer');
		} else {
			$this->UnitKerja_model->update($id);
			redirect('Admin/UnitKerja','refresh');
		}
	}
	public function delete($id)
	{
		$this->UnitKerja_model->delete($id);
		redirect('Admin/UnitKerja','refresh');
	}
}
