<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Toga extends CI_Controller {

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
		$data['status'] = $this->M_toga->get_tbl_toga();
        // $this->load->view('tpl/v_head');
        // $this->load->view('tpl/v_menu');
        $this->load->view('toga/v_toga',$data);
		$this->load->view('tpl/script');
	}

	public function edit_toga($nim) {
		$data['status'] = $this->M_toga->get_toga_by_nim($nim);
		$this->load->view('tpl/v_head');
		// $this->load->view('tpl/v_menu');
		$this->load->view('toga/edit_toga', $data);
		$this->load->view('tpl/script');
	}
	

	public function update_toga() {
		$id = $this->input->post('id');
		$nim = $this->input->post('nim');
		$baju = $this->input->post('baju');
		$topi = $this->input->post('topi');
		$skecel = $this->input->post('skecel');
		$samir = $this->input->post('samir');
		$logo = $this->input->post('logo');
		$selendang = $this->input->post('selendang');
		$sts_selendang = ($this->input->post('selendang') == 'Tidak Ada') ? 0 : $this->input->post('sts_selendang');
		
		
		$data = array(
			'baju' => $baju,
			'topi' => $topi,
			'skecel' => $skecel,
			'samir' => $samir,
			'logo' => $logo,
			'selendang' => $selendang,
			'sts_selendang' => $sts_selendang
		);
		
		$this->M_toga->update_toga($id, $data);

		if ($data['baju'] == '1' && $data['topi'] == '1' && 
        $data['skecel'] == '1' && $data['samir'] == '1' && 
        $data['logo'] == '1' && 
        ($data['selendang'] == 'Tidak Ada' || $data['sts_selendang'] == '1')) {
        // Update student status
        $this->M_toga->update_mhs($nim, 1);
    }

		
		redirect('toga');
	}

}
