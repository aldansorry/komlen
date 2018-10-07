<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UnitKerja_model extends CI_Model {

	public function get()
	{
		$this->db->select("unit_kerja.*");
		return $this->db->get('unit_kerja')->result();
	}
	public function get_id($id)
	{
		return $this->db->where('id',$id)->get('unit_kerja')->row(0);
	}
	public function insert()
	{
		$set = array(
			'kode' => $this->input->post('kode'),
			'nama' => $this->input->post('nama'),
		);
		$this->db->insert('unit_kerja',$set);
	}
	public function update($id)
	{
		$set = array(
			'kode' => $this->input->post('kode'),
			'nama' => $this->input->post('nama'),
		);
		$this->db->where('id',$id);
		$this->db->update('unit_kerja',$set);
	}
	public function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('unit_kerja');
	}
}
