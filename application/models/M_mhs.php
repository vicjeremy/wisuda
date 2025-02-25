<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_mhs extends CI_Model {
    public function get_data_by_nim($nim)
	{
		$sql = "SELECT * FROM tbl_mhs WHERE nim = ?";
		$query = $this->db->query($sql, array($nim));

		if ($query->num_rows() > 0) {
			return $query->result_array();
		} else {
			return array();
		}
	}

	
	// Fungsi untuk mengambil data status kawin dari tabel status_kawin
	public function get_nim($nim)
	{
		$sql = "SELECT * FROM tbl_mhs WHERE nim = ?";
		$query = $this->db->query($sql, array($nim));
		return $query->row_array(); // Mengembalikan satu baris data sebagai array
	}
	
	public function update_mahasiswa($data)
	{
		if (empty($data['id_mhs'])) {
			return false;
		}

		// Update data di tbl_mhs
		$this->db->where('id_mhs', $data['id_mhs']);
		$this->db->update('tbl_mhs', $data);

		// Perbarui kolom email di tbl_akun berdasarkan nim
		if (isset($data['email'])) {
			$this->db->where('user', $data['nim']); 
			$this->db->update('tbl_akun', array('email' => $data['email']));
		}

		// Update sts_foto if photos are updated
		if (!empty($data['foto_almet']) || !empty($data['foto_keluarga'])) {
			$this->db->where('id_mhs', $data['id_mhs']);
			$this->db->update('tbl_mhs', array('sts_foto' => 1));
		}

		return true;
	}

	
	function hapus($params){
		// Jalankan perintah DELETE untuk menghapus data dari tabel mahasiswa
		$sql = "DELETE FROM tbl_mhs WHERE nim = ?";
		return $this->db->query($sql, $params);
}

    public function get_data() {
        $query = $this->db->get('tbl_mhs'); // Replace 'tbl_mhs' with the actual table name
        return $query->result_array();
    }
}
