<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Petugas_model');
	}
	public function index()
	{
		$data['data'] = $this->Petugas_model->get();
		$this->load->view('admin/header');
		$this->load->view('admin/petugas/petugas',$data);
		$this->load->view('admin/footer');
	}
	public function insert()
	{
		$this->form_validation->set_rules('nik','Nik',"required|min_length[12]|numeric|trim");
		$this->form_validation->set_rules('nama','Nama',"required|alpha|trim");
		$this->form_validation->set_rules('alamat','Alamat',"required|trim");
		$this->form_validation->set_rules('telp','Telp',"required|numeric|trim");
		$this->form_validation->set_rules('email','Email',"required|valid_email|trim");
		$this->form_validation->set_rules('username','Username',"required|alpha_numeric|trim");
		$this->form_validation->set_rules('password','Password',"required|min_length[6]|trim");
		
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/header');
			$this->load->view('admin/petugas/insert');
			$this->load->view('admin/footer');
		} else {
			$this->Petugas_model->insert();
			redirect('Admin/Petugas','refresh');
		}
	}
	public function update($id)
	{
		$this->form_validation->set_rules('nik','Nik',"required|min_length[12]|numeric|trim");
		$this->form_validation->set_rules('nama','Nama',"required|alpha|trim");
		$this->form_validation->set_rules('alamat','Alamat',"required|trim");
		$this->form_validation->set_rules('telp','Telp',"required|numeric|trim");
		$this->form_validation->set_rules('email','Email',"required|valid_email|trim");
		$this->form_validation->set_rules('username','Username',"required|alpha_numeric|trim");
		$this->form_validation->set_rules('password','Password',"required|min_length[6]|trim");
		
		if ($this->form_validation->run() == FALSE) {
			$data['petugas'] = $this->Petugas_model->get_id($id);
			$this->load->view('admin/header');
			$this->load->view('admin/petugas/update',$data);
			$this->load->view('admin/footer');
		} else {
			$this->Petugas_model->update($id);
			redirect('Admin/Petugas','refresh');
		}
	}
	public function delete($id)
	{
		$this->Petugas_model->delete($id);
		redirect('Admin/Petugas','refresh');
	}
}
?>