<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Keu extends CI_Controller {
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

        // Load SimpleXLSX
		require_once APPPATH . 'third_party/src/SimpleXLSX.php';

    }
	public function index() {
		$data['status'] = $this->M_keu->get_tbl_mhs();
        $this->load->view('tpl/v_head');
        $this->load->view('tpl/v_menu');
        $this->load->view('keu/v_keu',$data);
	}
    public function edit_uang($nim) {
		$data['status'] = $this->M_keu->get_mhs_by_nim($nim);
		$this->load->view('tpl/v_head');
		$this->load->view('tpl/v_menu');
		$this->load->view('keu/edit_keu', $data);
	}

	public function update_uang() {
		$nim = $this->input->post('id');
		$data = array(
			'tamu' => $this->input->post('tamu'),
			'sts_wsd' => $this->input->post('wisuda'),
			'sts_toga' =>$this->input->post('toga'),
			'sts_tamu' => $this->input->post('sts_tamu')
		);
		
		$this->M_keu->update_uang($nim, $data);
		
		redirect('keuangan');
	}
}