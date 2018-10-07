<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LingkupKeluhan_model extends CI_Model {

	public function get()
	{
		$this->db->select("lingkup_keluhan.*");
		return $this->db->get('lingkup_keluhan')->result();
	}
	public function get_id($id)
	{
		return $this->db->where('id',$id)->get('lingkup_keluhan')->row(0);
	}
	public function insert()
	{
		$set = array(
			'kode' => $this->input->post('kode'),
			'nama' => $this->input->post('nama'),
		);
		$this->db->insert('lingkup_keluhan',$set);
	}
	public function update($id)
	{
		$set = array(
			'kode' => $this->input->post('kode'),
			'nama' => $this->input->post('nama'),
		);
		$this->db->where('id',$id);
		$this->db->update('lingkup_keluhan',$set);
	}
	public function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('lingkup_keluhan');
	}
}
