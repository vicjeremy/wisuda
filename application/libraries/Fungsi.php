<?php

Class Fungsi{
	protected $ci;
	
	function __construct(){
		$this->ci =& get_instance();
	}
	
	function user_login(){
		$this->ci->load->model('M_auth');
		$id = $this->ci->session->userdata('user');
		$user_data = $this->ci->M_auth->get($id)->row();
		return $user_data;
	}
}