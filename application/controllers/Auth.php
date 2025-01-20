<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function login()
	{
		check_already_login();
		$this->load->view('auth/v_login');
	}
	
	public function process_login()
	{
		$post = $this->input->post();
		if(isset($post['login'])){
			$query = $this->M_auth->login($post);
			if($query->num_rows() > 0){
				$row = $query->row();
				$params = array(
					'level'=>$row->level,
					'user' => $row->user,
					'nim' => $row->user,
				);
				$this->session->set_userdata($params);
				redirect('home');
			}else{
				$data['error'] = 'Username atau password salah';
				$this->load->view('auth/v_login', $data);
			}
			
		}
	}
	
	public function logout()
    {
        $params = array('user', 'level', 'last_activity'); // Menghapus last_activity juga
        $this->session->unset_userdata($params);
        redirect('home');
    }

}
