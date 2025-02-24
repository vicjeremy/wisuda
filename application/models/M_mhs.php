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
		if (empty($data['nim'])) {
			return false;
		}

		// Filter only the fields that exist in tbl_mhs
		$allowed_fields = array(
			'nim', 'nama', 'lok_lahir', 'tgl_lahir', 'alamat', 
			'email', 'hp', 'size', 'foto_almet', 'foto_keluarga', 
			'tamu', 'fakultas', 'prodi', 'ipk', 'skripsi'
		);
		
		$mhs_data = array_intersect_key($data, array_flip($allowed_fields));

		// Update data di tbl_mhs
		$this->db->where('nim', $data['nim']);
		$this->db->update('tbl_mhs', $mhs_data);

		// Perbarui kolom email di tbl_akun berdasarkan nim
		if (isset($data['email'])) {
			$akun_data = array(
				'email' => $data['email']
			);
			$this->db->where('user', $data['nim']); 
			$this->db->update('tbl_akun', $akun_data);
		}

		// Update sts_foto if photos are updated
		if (!empty($data['foto_almet']) || !empty($data['foto_keluarga'])) {
			$this->db->where('nim', $data['nim']);
			$this->db->update('tbl_mhs', array('sts_foto' => 0));
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