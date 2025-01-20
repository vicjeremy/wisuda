<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Akses extends CI_Controller {
    public function __construct(){
		parent::__construct();
		// Cek apakah pengguna sudah login dan waktu terakhir aktif
		$last_activity = $this->session->userdata('last_activity');
		$current_time = time(); // Ambil waktu saat ini
		
		// Jika waktu terakhir lebih dari 3 jam yang lalu, logout otomatis
		if ($last_activity && ($current_time - $last_activity) > 1800) {
			$this->session->unset_userdata('id');
			$this->session->unset_userdata('level');
			redirect('login');
		}

		// Perbarui waktu terakhir aktivitas jika pengguna masih aktif
		$this->session->set_userdata('last_activity', $current_time);
	}

	public function index()
	{
        $level = $this->session->userdata('level');

		if ($level == 6) { // Mahasiswa
			redirect('mahasiswa');
		} elseif ($level == 5) { // Foto
			redirect('foto');
		} elseif ($level == 4) { // Toga
			redirect('toga');
		} elseif ($level == 3) { // Keuangan
			redirect('keuangan');
		} elseif ($level == 2) { // Akademik
			redirect('akademik');
		} elseif ($level == 1) { // Admin
			redirect('admin');
		} else	{
			$data['student_count'] = $this->M_akses->count_students();
			$data['paid_students'] = $this->M_akses->count_paid_students();
			$data['sudah_ambil'] = $this->M_akses->count_ambil_toga();
			$data['tamu'] = $this->M_akses->count_tamu();
			$data['mhs_data'] = $this->M_akses->get_mhs_data();
			$this->load->view('akses/landing', $data);
		} 

    }
}