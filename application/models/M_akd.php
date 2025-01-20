<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_akd extends CI_Model {

	 // Fungsi untuk menyimpan data mahasiswa ke dalam tabel tbl_mhs
	 public function insert_data($data) {
        // Menyimpan data ke dalam tabel tbl_mhs
        $this->db->insert('tbl_mhs', $data);
    }

	public function get_all_data()
    {
        $query = $this->db->get('tbl_mhs'); // Query untuk mengambil semua data dari tbl_mhs
        return $query->result_array(); // Mengembalikan hasil sebagai array
    }

	public function edit_data($where, $table){
		return $this->db->get_where($table, $where);
	}
	public function update_data($where,$rs_data,$table){
		$this->db->where($where);
		$this->db->update($table,$rs_data);
	}

	public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function get_mhs_by_nim($nim) {
        $this->db->where('nim', $nim);
        $query = $this->db->get('tbl_mhs');
        return $query->row_array();
    }

	public function update_mhs($nim, $data) {
        $this->db->where('nim', $nim);
        $this->db->update('tbl_mhs', $data);
    }

	public function delete_mhs($nim) {
        $this->db->where('nim', $nim);
        $this->db->delete('tbl_mhs');
    }

	public function insert_akun($data_akun)
    {
        // Menyimpan data ke dalam tabel tbl_akun
        $this->db->insert('tbl_akun', $data_akun);
    }
}