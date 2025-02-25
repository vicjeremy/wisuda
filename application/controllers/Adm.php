<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Adm extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		check_not_login();

		// Cek apakah pengguna sudah login dan waktu terakhir aktif
		$last_activity = $this->session->userdata('last_activity');
		$current_time = time(); // Ambil waktu saat ini

		// Jika waktu terakhir lebih dari 30 menit yang lalu, logout otomatis
		if ($last_activity && ($current_time - $last_activity) > 1800) {
			$this->session->unset_userdata('id');
			$params = array('user', 'level', 'last_activity'); // Menghapus last_activity juga
        	$this->session->unset_userdata($params);
			redirect('login');
		}

		// Perbarui waktu terakhir aktivitas jika pengguna masih aktif
		$this->session->set_userdata('last_activity', $current_time);
	}

	// Method untuk menampilkan halaman utama admin
	public function index()
	{
		$data['status'] = $this->M_adm->get_akun(); // Ambil data status
		// $this->load->view('tpl/v_head');
		// $this->load->view('tpl/v_menu');
		$this->load->view('adm/v_adm', $data); // Kirim data ke view
		$this->load->view('tpl/script');
	}

	// Method untuk menampilkan halaman akun
	public function view_akn()
	{
		$data['status'] = $this->M_adm->get_akun();
		$this->load->view('tpl/v_head');
		$this->load->view('tpl/v_menu');
		$this->load->view('adm/v_akn', $data);
	}

	// Method untuk menampilkan halaman tambah akun
	public function add_akn()
	{
		$this->load->view('tpl/v_head');
		$this->load->view('tpl/v_menu');
		$this->load->view('adm/add_akn');
	}

	// Method untuk menyimpan data akun baru
	public function save_akn()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$level = $this->input->post('level');
		$data = array(
			'user' => $username,
			'pass' => md5($password),
			'level' => $level
		);

		$this->M_adm->insert_akn($data);
		$this->session->set_flashdata('message', 'Data berhasil ditambahkan');
		redirect('adm');
	}

	// Method untuk menampilkan halaman edit akun
	public function edit_akn($id)
	{
		$data['status'] = $this->M_adm->get_akun_by_id($id);
		$this->load->view('tpl/v_head');
		$this->load->view('tpl/v_menu');
		$this->load->view('adm/edit_akn', $data);
	}

	// Method untuk memperbarui data akun
	public function update_akn()
	{
		$id = $this->input->post('user');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$level = $this->input->post('level');

		$data = array(
			'user' => $username,
			'pass' => $password,
			'level' => $level
		);

		$this->M_adm->update_akn($id, $data);
		redirect('adm/view_akn');
	}

	// Method untuk menghapus data akun
	public function delete_akn($id)
	{
		$this->M_adm->delete_akn($id);
		$this->session->set_flashdata('message', 'Data berhasil dihapus');
		redirect('adm');
	}
}
