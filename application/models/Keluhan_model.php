<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keluhan_model extends CI_Model {

	public function get()
	{
		$this->db->select("keluhan.*,(select nama from unit_kerja where id=fk_unit_kerja) as unit_kerja,(select nama from lingkup_keluhan where id=fk_lingkup_keluhan) as lingkup_keluhan");
		return $this->db->get('keluhan')->result();
	}
	public function get_id($id)
	{

		$this->db->select("keluhan.*,(select nama from unit_kerja where id=fk_unit_kerja) as unit_kerja,(select nama from lingkup_keluhan where id=fk_lingkup_keluhan) as lingkup_keluhan");
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

	public function get_by_session()
	{
		if ($this->session->userdata("logged_in_user") != null) {
			$id = $this->session->userdata("logged_in_user")['id'];
			$this->db->select("keluhan.*,(select nama from unit_kerja where id=fk_unit_kerja) as unit_kerja,(select nama from lingkup_keluhan where id=fk_lingkup_keluhan) as lingkup_keluhan");

			$this->db->where('fk_mahasiswa',$id);
			return $this->db->get('keluhan')->result();
		}else{
			return false;
		}
	}
	public function get_respon($id)
	{
		$this->db->select("respon.*,(select nama from petugas where id=fk_petugas) petugas");
		$this->db->where('fk_keluhan',$id);
		return $this->db->get('respon')->result();
	}
	public function update_readed($id,$status)
	{
		$set['is_readed'] = $status;
		$this->db->where("id",$id);
		$this->db->update("keluhan",$set);
	}


	public function get_count_keluhan_per_mount()
	{
		$this->db->select("count(id) as count_keluhan,month(tanggal) as month_keluhan");
		$this->db->from("keluhan");
		$this->db->order_by("month(keluhan.tanggal)","asc");
		$this->db->group_by("month(keluhan.tanggal)");
		return $this->db->get()->result();
	}

	public function get_count_keluhan_terbalas_per_mount()
	{
		$this->db->select("count(keluhan.id) as count_keluhan,month(tanggal) as month_keluhan");
		$this->db->from("keluhan");
		$this->db->join("respon","keluhan.id=respon.fk_keluhan",'left');
		$this->db->where("respon.id",null);
		$this->db->order_by("month(keluhan.tanggal)","asc");
		$this->db->group_by("month(keluhan.tanggal)");
		return $this->db->get()->result();
	}

	public function get_keluhan_by_unit_kerja()
	{
		$this->db->select("count(id) as count_keluhan,(select nama from unit_kerja where id=fk_unit_kerja) as unit_kerja");
		$this->db->from("keluhan");
		$this->db->group_by("fk_unit_kerja");
		return $this->db->get()->result();
	}
	public function get_keluhan_by_lingkup_keluhan()
	{
		$this->db->select("count(id) as count_keluhan,(select nama from lingkup_keluhan where id=fk_lingkup_keluhan) as lingkup_keluhan");
		$this->db->from("keluhan");
		$this->db->group_by("fk_lingkup_keluhan");
		return $this->db->get()->result();
	}
}
