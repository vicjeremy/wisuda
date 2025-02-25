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

function convert_date_format($date) {
	if (empty($date)) return '';
	
	// Convert YYMMDD format to Y-m-d
	$day = substr($date, 0, 2);
	$month = substr($date, 2, 2);
	$year = '20' . substr($date, 4, 2);
	
	// Create date object
	$date_obj = DateTime::createFromFormat('d-m-Y', "$day-$month-$year");
	
	// Return formatted date
	return $date_obj ? $date_obj->format('d F Y') : '';
}

function date_to_html($date) {
	if (empty($date)) return '';
	
	// Convert YYMMDD format to Y-m-d
	$day = substr($date, 0, 2);
	$month = substr($date, 2, 2);
	$year = '20' . substr($date, 4, 2);
	
	return "$year-$month-$day"; // HTML date format (YYYY-MM-DD)
}


