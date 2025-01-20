<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_akses extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Get data from tbl_mhs
     *
     * @return array
     */
    public function get_mhs_data()
    {
        // Query untuk mengambil data dari tabel tbl_mhs
        $this->db->select('nim, sts_wsd, ambil_toga');
        $this->db->from('tbl_mhs');
        $query = $this->db->get();
        return $query->result_array(); // Mengembalikan data dalam bentuk array
    }

    public function count_students()
    {
        $this->db->from('tbl_mhs'); // Tabel mahasiswa
        return $this->db->count_all_results(); // Menghitung total baris
    }

    public function count_paid_students()
    {
        $this->db->from('tbl_mhs'); // Pilih tabel
        $this->db->where('sts_wsd', 1); // Kondisi sts_keu = 1
        return $this->db->count_all_results(); // Hitung total baris
    }


    public function count_ambil_toga()
    {
        $this->db->from('tbl_mhs'); // Pilih tabel
        $this->db->where('ambil_toga', 1); // Filter status keuangan lunas (1)
        return $this->db->count_all_results(); // Hitung total baris
    }

    public function count_tamu()
    {
        $this->db->select_sum('tamu'); // Mengambil jumlah total tamu
        $this->db->from('tbl_mhs'); // Pilih tabel
        $query = $this->db->get();
        return $query->row()->tamu; // Mengembalikan total tamu
    }


}
