<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mhs extends CI_Controller {

	public function __construct() {
        parent::__construct();
		check_not_login();
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

	public function index() {
		$nim = $this->session->userdata('nim'); // Ambil NIM dari session
		$this->load->model('M_mhs');
		$rs_data['result'] = $this->M_mhs->get_data_by_nim($nim); // Ambil data mahasiswa

		// $this->load->view('tpl/v_head');
		// $this->load->view('tpl/v_menu');
		$this->load->view('mhs/v_mhs', $rs_data); // Pass the data to the view
	}
    public function lihat_data(){
		$nim = $this->session->userdata('nim'); // Ambil NIM dari session
        $rs_data['result'] = $this->M_mhs->get_data_by_nim($nim);

		$nim = $this->session->userdata('nim'); // Ambil NIM dari session=
		$rs_data['mahasiswa'] = $this->M_mhs->get_nim($nim); // Ambil data mahasiswa

		 // Pengecekan jika data mahasiswa kosong
		 if (empty($rs_data['mahasiswa'])) {
			$rs_data['message'] = 'Tidak ada data mahasiswa';
		} else {
			$rs_data['message'] = ''; // Tidak ada pesan jika data ada
		}

        $this->load->view('tpl/v_head');
		$this->load->view('tpl/v_menu');
        $this->load->view('mhs/v_data', $rs_data);
	}

	
	public function update_data()
	{
		$data = $this->input->post();
		$this->load->model('M_mhs');
		$this->M_mhs->update_mahasiswa($data); // Buat fungsi ini di model
		$this->session->set_flashdata('update_success', true);
		redirect('mhs'); // Kembali ke form edit
	}
}