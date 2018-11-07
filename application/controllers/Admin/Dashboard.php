<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('logged_in') == null){
			redirect('Login','refresh');
		}
	}
	public function index()
	{
		$this->load->model('Keluhan_model');
		$data['keluhanbelumbulanan'] = $this->Keluhan_model->get_count_keluhan_per_mount();
		$data['keluhanterbalasbulanan'] = $this->Keluhan_model->get_count_keluhan_terbalas_per_mount();
		$data['keluhanunitkerja'] = $this->Keluhan_model->get_keluhan_by_unit_kerja();
		$data['keluhanlingkupkeluhan'] = $this->Keluhan_model->get_keluhan_by_lingkup_keluhan();
		$this->load->view('admin/header');
		$this->load->view('admin/index',$data);
		$this->load->view('admin/footer');
	}
}
