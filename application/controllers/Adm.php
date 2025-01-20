<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Adm extends CI_Controller {

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

	public function index(){
		$this->load->view('tpl/v_head');
		$this->load->view('tpl/v_menu');
		$this->load->view('adm/v_adm');
	}
    public function view_akn() {
		$data['status'] = $this->M_adm->get_akun();
		$this->load->view('tpl/v_head');
		$this->load->view('tpl/v_menu');
		$this->load->view('adm/v_akn', $data);
	}
	
	public function add_akn() {
		$this->load->view('tpl/v_head');
		$this->load->view('tpl/v_menu');
		$this->load->view('adm/add_akn');
	}
	
	public function save_akn() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$level = $this->input->post('level');
		$data = array(
			'user' => $username,
			'pass' => md5($password),
			'level' => $level
			
		);

		$this->M_adm->insert_akn($data);
		redirect('adm/view_akn');
	}


	public function edit_akn($id) {
		$data['status'] = $this->M_adm->get_akun_by_id($id);
		$this->load->view('tpl/v_head');
		$this->load->view('tpl/v_menu');
		$this->load->view('adm/edit_akn', $data);
	}

	public function update_akn() {
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

	public function delete_akn($id) {
		$this->M_adm->delete_akn($id);
		
		redirect('adm/view_akn');
	}
}