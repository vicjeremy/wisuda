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
        $result = $query->row_array();
    
        // Pastikan format tanggal lahir menjadi 'YYYY-MM-DD'
        if (!empty($result['tgl_lahir'])) {
            $result['tgl_lahir'] = date('Y-m-d', strtotime($result['tgl_lahir']));
        }
    
        return $result;
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

    public function update_password($nim, $password)
    {
        $this->db->where('user', $nim);
        $this->db->update('tbl_akun', ['pass' => $password]);
    }    

   //FILTER
    public function getTahunLulus() {
        $this->db->distinct();
        $this->db->select('thn_lulus');
        $this->db->from('tbl_mhs');
        $this->db->order_by('thn_lulus', 'ASC');

        $query = $this->db->get();
        return $query->result_array();
    }

    public function getMahasiswaByProdi($prodi) {
        $this->db->select('nim, sts_wsd, ambil_toga');
        $this->db->from('tbl_mhs');
        $this->db->where('prodi', $prodi);
        
        $query = $this->db->get();
        $result = $query->result_array();

        // Debugging
        error_log("Query untuk prodi: " . $prodi);
        error_log("Result: " . print_r($result, true));

        return $result;
    }

    public function getMahasiswaByFilter($thn_lulus = [], $prodi = []) {
        $this->db->select('nim, nama, lok_lahir, tgl_lahir, fakultas, prodi, ipk, thn_lulus');
        $this->db->from('tbl_mhs');

        if (!empty($thn_lulus)) {
            $this->db->where_in('thn_lulus', $thn_lulus);
        }

        if (!empty($prodi)) {
            $this->db->where_in('prodi', $prodi);
        }

        $query = $this->db->get();
        return $query->result_array();
    }

}