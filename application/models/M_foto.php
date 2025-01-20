<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_foto extends CI_Model {
   
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function update_foto($nim, $status) {
        $data = array(
            'sts_foto' => $status
        );
        $this->db->where('nim', $nim);
        $this->db->update('tbl_mhs', $data);
    }
}