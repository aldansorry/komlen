<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keluhan_model extends CI_Model {

	public function get()
	{
		$this->db->select("keluhan.*");
		return $this->db->get('keluhan')->result();
	}
	public function get_id($id)
	{
		return $this->db->where('id',$id)->get('keluhan')->row(0);
	}
	public function auto_code()
	{
		$last_id_sql = $this->db->query("select id from keluhan order by id desc limit 1");
		if($last_id_sql->num_rows() == 0){
			$last_id = 0;
		}else{
			$last_id = $last_id_sql->row(0)->id;
		}
		$new_id = substr("0000".$last_id+1, -4);
		return "KEL".$new_id;
	}
	public function insert()
	{
		$set = array(
			'kode' => $this->input->post('kode'),
			'tanggal' => $this->input->post('tanggal'),
			'tanggal' => $this->input->post('tanggal'),
			'judul' => $this->input->post('judul'),
			'keluhan' => $this->input->post('keluhan'),
			'solusi' => $this->input->post('solusi'),
			'status' => $this->input->post('status'),
			'fk_mahasiswa' => $this->input->post('fk_mahasiswa'),
			'fk_lingkup_keluhan' => $this->input->post('fk_lingkup_keluhan'),
			'fk_unit_kerja' => $this->input->post('fk_unit_kerja'),
		);
		$this->db->insert('keluhan',$set);
	}
	public function update($id)
	{
		$set = array(
			'kode' => $this->input->post('kode'),
			'tanggal' => $this->input->post('tanggal'),
			'tanggal' => $this->input->post('tanggal'),
			'judul' => $this->input->post('judul'),
			'keluhan' => $this->input->post('keluhan'),
			'solusi' => $this->input->post('solusi'),
			'status' => $this->input->post('status'),
			'fk_mahasiswa' => $this->input->post('fk_mahasiswa'),
			'fk_lingkup_keluhan' => $this->input->post('fk_lingkup_keluhan'),
			'fk_unit_kerja' => $this->input->post('fk_unit_kerja'),
		);
		$this->db->where('id',$id);
		$this->db->update('keluhan',$set);
	}
	public function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('keluhan');
	}
}
