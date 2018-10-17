<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LingkupKeluhan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('LingkupKeluhan_model');
		if($this->session->userdata('logged_in') == null){
			redirect('Login','refresh');
		}
		if($this->session->userdata('logged_in')['fk_level'] == 3){
			redirect('Admin/Dashboard','refresh');
		}
	}
	public function index()
	{
		$data['data'] = $this->LingkupKeluhan_model->get();
		$this->load->view('admin/header');
		$this->load->view('admin/lingkupkeluhan/lingkupkeluhan',$data);
		$this->load->view('admin/footer');
	}
	public function insert()
	{
		$this->form_validation->set_rules('kode','Kode',"required|trim");
		$this->form_validation->set_rules('nama','Nama',"required");

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/header');
			$this->load->view('admin/lingkupkeluhan/insert');
			$this->load->view('admin/footer');
		} else {
			$this->LingkupKeluhan_model->insert();
			redirect('Admin/LingkupKeluhan','refresh');
		}
	}
	public function update($id)
	{
		$this->form_validation->set_rules('kode','Kode',"required|trim");
		$this->form_validation->set_rules('nama','Nama',"required");
		
		
		if ($this->form_validation->run() == FALSE) {
			$data['lingkup_keluhan'] = $this->LingkupKeluhan_model->get_id($id);
			$this->load->view('admin/header');
			$this->load->view('admin/lingkupkeluhan/update',$data);
			$this->load->view('admin/footer');
		} else {
			$this->LingkupKeluhan_model->update($id);
			redirect('Admin/LingkupKeluhan','refresh');
		}
	}
	public function delete($id)
	{
		$this->LingkupKeluhan_model->delete($id);
		redirect('Admin/LingkupKeluhan','refresh');
	}
}
