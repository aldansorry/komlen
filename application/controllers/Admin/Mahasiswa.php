<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Mahasiswa_model');
		if($this->session->userdata('logged_in') == null){
			redirect('Login','refresh');
		}
		if($this->session->userdata('logged_in')['fk_level'] == 3){
			redirect('Admin/Dashboard','refresh');
		}
	}
	public function index()
	{
		$data['data'] = $this->Mahasiswa_model->get();
		$this->load->view('admin/header');
		$this->load->view('admin/mahasiswa/mahasiswa',$data);
		$this->load->view('admin/footer');
	}
	public function insert()
	{
		$this->form_validation->set_rules('nama','Nama','required|regex_match[/^[a-zA-Z][a-zA-Z\\s]+$/]');
		$this->form_validation->set_rules('alamat','Alamat',"required|trim");
		$this->form_validation->set_rules('telp','Telp',"required|numeric|trim");
		$this->form_validation->set_rules('email','Email',"required|valid_email|trim");
		$this->form_validation->set_rules('username','Username',"required|alpha_numeric|trim");
		$this->form_validation->set_rules('password','Password',"required|min_length[6]|trim");
		
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/header');
			$this->load->view('admin/mahasiswa/insert');
			$this->load->view('admin/footer');
		} else {
			$this->Mahasiswa_model->insert();
			redirect('Admin/Mahasiswa','refresh');
		}
	}
	public function update($id)
	{
		$this->form_validation->set_rules('nama','Nama','required|regex_match[/^[a-zA-Z][a-zA-Z\\s]+$/]');
		$this->form_validation->set_rules('alamat','Alamat',"required|trim");
		$this->form_validation->set_rules('telp','Telp',"required|numeric|trim");
		$this->form_validation->set_rules('email','Email',"required|valid_email|trim");
		$this->form_validation->set_rules('username','Username',"required|alpha_numeric|trim");
		$this->form_validation->set_rules('password','Password',"required|min_length[6]|trim");
		
		if ($this->form_validation->run() == FALSE) {
			$data['mahasiswa'] = $this->Mahasiswa_model->get_id($id);
			$this->load->view('admin/header');
			$this->load->view('admin/mahasiswa/update',$data);
			$this->load->view('admin/footer');
		} else {
			$this->Mahasiswa_model->update($id);
			redirect('Admin/Mahasiswa','refresh');
		}
	}
	public function delete($id)
	{
		$this->Mahasiswa_model->delete($id);
		redirect('Admin/Mahasiswa','refresh');
	}
}
