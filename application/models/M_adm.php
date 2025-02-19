<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_adm extends CI_Model
{
	public function insert_akn($data)
	{
		$this->db->insert('tbl_akun', $data);
	}

	public function get_akun()
	{
		return $this->db->get('tbl_akun')->result_array();
	}

	public function get_akun_by_id($id)
	{
		$this->db->where('user', $id);
		return $this->db->get('tbl_akun')->row_array();
	}

	public function update_akn($id, $data)
	{
		$this->db->where('user', $id);
		$this->db->update('tbl_akun', $data);
	}

	public function delete_akn($id)
	{
		$this->db->where('user', $id);
		$this->db->delete('tbl_akun');
	}
}
