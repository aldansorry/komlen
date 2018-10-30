<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('Keluhan_model');
		$data['keluhan'] = $this->Keluhan_model->get_by_session();
		$this->load->view('home',$data);
	}
	public function modal_respon($id)
	{
		$this->load->model("Keluhan_model");
		$this->Keluhan_model->update_readed($id,"1");
		$data['keluhan'] = $this->Keluhan_model->get_id($id);
		$data['respon'] = $this->Keluhan_model->get_respon($id);
		$this->load->view('modal_respon',$data);
	}
	public function keluhan()
	{
		if($this->session->userdata('logged_in_user') == null){
			redirect('Home','refresh');
		}
		$this->load->model('Keluhan_model');
		$set = array(
			'kode' => $this->Keluhan_model->auto_code(),
			'tanggal' => date("Y-m-d"),
			'judul' => $this->input->post('judul'),
			'keluhan' => $this->input->post('keluhan'),
			'solusi' => $this->input->post('solusi'),
			'status' => 1,
			'fk_mahasiswa' => $this->session->userdata('logged_in_user')['id'],
			'fk_lingkup_keluhan' => $this->input->post('fk_lingkup_keluhan'),
			'fk_unit_kerja' => $this->input->post('fk_unit_kerja'),

		);
		$this->db->insert('keluhan',$set);
		redirect('Home','refresh');
	}
}
