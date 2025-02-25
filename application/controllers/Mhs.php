<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Mhs extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('M_mhs');
		check_not_login();
		// Cek apakah pengguna sudah login dan waktu terakhir aktif
		$last_activity = $this->session->userdata('last_activity');
		$current_time = time();

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
		$nim = $this->session->userdata('nim');
		$this->load->model('M_mhs');
		
		// Get the student data
		$result = $this->M_mhs->get_data_by_nim($nim);
		
		// Check if data exists
		if (empty($result)) {
			$data['message'] = 'Tidak ada data mahasiswa';
			$data['mahasiswa'] = array();
		} else {
			$data['message'] = '';
			$data['mahasiswa'] = $result[0]; // Pass single row directly as mahasiswa
		}

		$this->load->view('mhs/v_mhs', $data);
	}

	public function update_data()
	{
		$data = array();
		$fields = ['id_mhs', 'nim', 'skripsi', 'alamat', 'size', 'email', 'hp', 'foto_almet', 'foto_keluarga'];
		
		foreach ($fields as $field) {
			$value = $this->input->post($field);
			if (!empty($value)) {
			$data[$field] = $value;
			}
		}
		
		$this->load->model('M_mhs');
		$this->M_mhs->update_mahasiswa($data);
		$this->session->set_flashdata('update_success', true);
		redirect('mhs');
	}

	public function edit()
	{
		$nim = $this->session->userdata('nim');
		$this->load->model('M_mhs');
		
		// Get the student data
		$result = $this->M_mhs->get_data();
		$data['result'] = !empty($result) ? $result[0] : array();
		
		$this->load->view('mhs/edit_mhs', $data);
		$this->load->view('tpl/script');
	}
}
