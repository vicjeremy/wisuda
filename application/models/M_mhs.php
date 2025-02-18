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
    // Update data di tbl_mhs
    $this->db->where('nim', $data['nim']);
    $this->db->update('tbl_mhs', $data);

    // Perbarui kolom email di tbl_akun berdasarkan nim
    $akun_data = [
        'email' => $data['email']
    ];
    $this->db->where('user', $data['nim']); // 'user' adalah kolom nim di tbl_akun
    $this->db->update('tbl_akun', $akun_data);

	// Jika foto_almet atau foto_keluarga diupdate, ubah sts_foto menjadi 0 kecuali jika sts_foto sudah 1
	if (isset($data['foto_almet']) || isset($data['foto_keluarga'])) {
		$this->db->where('nim', $data['nim']);
		$this->db->where('sts_foto !=', 1);
		$this->db->update('tbl_mhs', ['sts_foto' => 0]);
	}
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