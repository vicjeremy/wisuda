<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Foto extends CI_Controller {

	public function __construct() {
        parent::__construct();
		check_not_login();
        // Cek apakah pengguna sudah login dan waktu terakhir aktif
		$last_activity = $this->session->userdata('last_activity');
		$current_time = time(); // Ambil waktu saat ini
		
		// Jika waktu terakhir lebih dari 3 jam yang lalu, logout otomatis
		if ($last_activity && ($current_time - $last_activity) > 1800) {
			$this->session->unset_userdata('id');
			$params = array('user', 'level', 'last_activity'); // Menghapus last_activity juga
        	$this->session->unset_userdata($params);
			redirect('login');
		}

		// Perbarui waktu terakhir aktivitas jika pengguna masih aktif
		$this->session->set_userdata('last_activity', $current_time);

        // Load SimpleXLSX
		require_once APPPATH . 'third_party/src/SimpleXLSX.php';

    }

	public function index() {
		$data['status'] = $this->M_keu->get_tbl_mhs();
        $this->load->view('tpl/v_head');
        // $this->load->view('tpl/v_menu');
        $this->load->view('foto/v_foto',$data);
		$this->load->view('tpl/script');
	}

	public function update_foto() {
		$nim = $this->input->post('nim');
		$status = $this->input->post('status');
		$this->M_foto->update_foto($nim, $status);
		redirect('foto');
	}
}
