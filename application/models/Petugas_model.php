<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas_model extends CI_Model {

	public function get()
	{
		$this->db->select("petugas.*");
		return $this->db->get('petugas')->result();
	}
	public function get_id($id)
	{
		return $this->db->where('id',$id)->get('petugas')->row(0);
	}
	public function insert()
	{
		$set = array(
			'nik' => $this->input->post('nik'),
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'telp' => $this->input->post('telp'),
			'email' => $this->input->post('email'),
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'fk_level' => $this->input->post('fk_level')
		);
		$this->db->insert('petugas',$set);
	}
	public function update($id)
	{
		$set = array(
			'nik' => $this->input->post('nik'),
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'telp' => $this->input->post('telp'),
			'email' => $this->input->post('email'),
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'fk_level' => $this->input->post('fk_level')
		);
		$this->db->where('id',$id);
		$this->db->update('petugas',$set);
	}
	public function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('petugas');
	}


}