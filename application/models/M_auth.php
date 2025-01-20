<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_auth extends CI_Model {

	public function login($post)
	{
		$pass=$_POST['password'];
		$this->db->select('*');
		$this->db->from('tbl_akun');
		$this->db->where('user', $post['username']);
		$this->db->where('pass', md5($post['password']));
		$query = $this->db->get();
		return $query;
	}
	
	public function get($id = null)
	{
		$this->db->from('tbl_akun');
		if($id != null){
			$this->db->where('user', $id);
		}
		$query = $this->db->get();
		return $query;
	}
	
	public function get_user_by_id($user_id) {
		// Lakukan query ke database untuk mendapatkan informasi pengguna berdasarkan ID
		$query = $this->db->get_where('tbl_akun', array('user' => $user_id));

		// Periksa apakah pengguna ditemukan
		if ($query->num_rows() > 0) {
			return $query->row_array(); // Mengembalikan data pengguna dalam bentuk array
		} else {
			return false; // Jika pengguna tidak ditemukan, kembalikan false
		}
	}

	//Fungsi untuk reset password

	public function save_reset_token($email, $token) {
        // Update kolom reset_token di dalam tabel users berdasarkan email
        $this->db->where('email', $email);
        $this->db->update('tbl_akun', array('reset_token' => $token));
    }

	public function get_user_by_token($token) {
        // Query ke database untuk mendapatkan data pengguna berdasarkan token
        $query = $this->db->get_where('tbl_akun', array('reset_token' => $token));

        return $query->row();
    }

	public function update_password($user_id, $password) {
        // Update password pengguna berdasarkan user_id
        $this->db->where('id_akun', $user_id);
        $this->db->update('tbl_akun', array('pass' => $password));
    }
}