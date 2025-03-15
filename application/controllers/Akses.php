<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Akses extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
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
		} else {
			$data['konten'] = $this->M_adm->get_all_contents();
			$this->load->view('akses/home', $data);
		}

	}

	public function informasi()
	{
		$data['student_count'] = $this->M_akses->count_students();
		$data['paid_students'] = $this->M_akses->count_paid_students();
		$data['sudah_ambil'] = $this->M_akses->count_ambil_toga();
		$data['tamu'] = $this->M_akses->count_tamu();
		$data['mhs_data'] = $this->M_akses->get_mhs_data();
		$this->load->view('akses/informasi', $data);
	}
	public function get_mahasiswa_by_prodi() {
		$prodi = $this->input->post('prodi');
	
		if (!empty($prodi)) {
			$this->load->model('M_akses'); // Load model
			$data = $this->M_akses->getMahasiswaByProdi($prodi);
	
			// Debugging
			error_log("Prodi diterima: " . $prodi);
			error_log("Hasil Query: " . print_r($data, true));
	
			echo json_encode($data);
		} else {
			error_log("Prodi kosong, mengembalikan array kosong.");
			echo json_encode([]);
		}
	}

	public function get_tahun_lulus() {
		$this->load->model('M_akses');
		$data = $this->M_akses->getTahunLulus();
		echo json_encode($data);
	}
	
	public function get_mahasiswa_by_filter() {
		$prodi = $this->input->post('prodi');
		$thn_lulus = $this->input->post('thn_lulus');
	
		if (!is_array($prodi)) {
			$prodi = [];
		}
	
		if (!is_array($thn_lulus)) {
			$thn_lulus = [];
		}
	
		$this->load->model('M_akses');
		$data = $this->M_akses->getMahasiswaByFilter($prodi, $thn_lulus);
	
		echo json_encode($data);
	}
}
