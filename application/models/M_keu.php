<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_keu extends CI_Model {
   
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_tbl_mhs() {
        return $this->db->get('tbl_mhs')->result_array();
    }

    public function get_mhs_by_nim($nim) {
        $this->db->where('nim', $nim);
        return $this->db->get('tbl_mhs')->row_array();
    }

    public function update_uang($nim, $data) {
		$this->db->where('nim', $nim);
		$this->db->update('tbl_mhs', $data);
	}

}