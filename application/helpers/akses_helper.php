<?php

function check_already_login(){
	$ci =& get_instance();
	$user_session = $ci->session->userdata('user');
	if($user_session){
		redirect('home');
	}
}

function check_not_login(){
	$ci =& get_instance();
	$user_session = $ci->session->userdata('user');
	if(!$user_session){
		redirect('login');
	}
}
