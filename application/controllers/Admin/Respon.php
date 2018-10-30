<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Respon extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Respon_model');
		if($this->session->userdata('logged_in') == null){
			redirect('Login','refresh');
		}
	}
	public function index()
	{
		$data['data'] = $this->Respon_model->get();
		$this->load->view('admin/header');
		$this->load->view('admin/respon/respon',$data);
		$this->load->view('admin/footer');
	}
	public function insert()
	{
		$this->form_validation->set_rules('balasan','Balasan',"required");
		$this->form_validation->set_rules('fk_keluhan','Keluhan',"required");
		$this->form_validation->set_rules('fk_petugas','Petugas',"required");

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/header');
			$this->load->view('admin/respon/insert');
			$this->load->view('admin/footer');
		} else {
			$this->Respon_model->insert();
			$this->load->model("Keluhan_model");
			$this->Keluhan_model->update_readed($this->input->post("fk_keluhan"),"0");
			redirect('Admin/Respon','refresh');
		}
	}
	public function update($id)
	{
		$this->form_validation->set_rules('balasan','Balasan',"required");
		$this->form_validation->set_rules('fk_keluhan','Keluhan',"required");
		$this->form_validation->set_rules('fk_petugas','Petugas',"required");
		
		
		if ($this->form_validation->run() == FALSE) {
			$data['respon'] = $this->Respon_model->get_id($id);
			$this->load->view('admin/header');
			$this->load->view('admin/respon/update',$data);
			$this->load->view('admin/footer');
		} else {
			$this->Respon_model->update($id);
			redirect('Admin/Respon','refresh');
		}
	}
	public function delete($id)
	{
		$this->Respon_model->delete($id);
		redirect('Admin/Respon','refresh');
	}
}
