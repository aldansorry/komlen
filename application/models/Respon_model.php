<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Respon_model extends CI_Model {

	public function get()
	{
		$this->db->select("respon.*");
		return $this->db->get('respon')->result();
	}
	public function get_id($id)
	{
		return $this->db->where('id',$id)->get('respon')->row(0);
	}
	public function insert()
	{
		$set = array(
			'balasan' => $this->input->post('balasan'),
			'fk_keluhan' => $this->input->post('fk_keluhan'),
			'fk_petugas' => $this->input->post('fk_petugas'),
		);
		$this->db->insert('respon',$set);
	}
	public function update($id)
	{
		$set = array(
			'balasan' => $this->input->post('balasan'),
			'fk_keluhan' => $this->input->post('fk_keluhan'),
			'fk_petugas' => $this->input->post('fk_petugas'),
		);
		$this->db->where('id',$id);
		$this->db->update('respon',$set);
	}
	public function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('respon');
	}
}
