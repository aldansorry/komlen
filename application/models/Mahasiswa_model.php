<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model {

	public function get()
	{
		$this->db->select("mahasiswa.*");
		return $this->db->get('mahasiswa')->result();
	}
	public function get_id($id)
	{
		return $this->db->where('id',$id)->get('mahasiswa')->row(0);
	}
	public function auto_code()
	{
		$yearnow = substr(date("Ymd"), -6);
		$id = $this->db->query("select id from mahasiswa order by id desc")->row(0)->id;
		$number = substr("000000".($id+1),-6);
		$nim = $yearnow.$number;
		return $nim;
	}
	public function insert()
	{
		$set = array(
			'nim' => $this->input->post("nim"),
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'telp' => $this->input->post('telp'),
			'email' => $this->input->post('email'),
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
		);
		$this->db->insert('mahasiswa',$set);
	}
	public function update($id)
	{
		$set = array(
			'nim' => $this->input->post('nim'),
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'telp' => $this->input->post('telp'),
			'email' => $this->input->post('email'),
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
		);
		$this->db->where('id',$id);
		$this->db->update('mahasiswa',$set);
	}
	public function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('mahasiswa');
	}
}
