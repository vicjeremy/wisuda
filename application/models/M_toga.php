<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_toga extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_tbl_toga() {
        return $this->db->get('tbl_toga')->result_array();
    }

    public function get_toga_by_nim($nim) {
        $this->db->where('nim', $nim);
        return $this->db->get('tbl_toga')->row_array();
    }

    public function insert_toga($data_toga)
    {
        // Menyimpan data ke dalam tabel tbl_toga
        $this->db->insert('tbl_toga', $data_toga);
    }

    public function update_toga($id, $data) {
		$this->db->where('id_toga', $id);
		$this->db->update('tbl_toga', $data);
	}
    public function update_mhs($nim, $ambil) {
        $data = array(
            'ambil_toga' => $ambil
        );
        $this->db->where('nim', $nim);
        $this->db->update('tbl_mhs', $data);
	}
}
