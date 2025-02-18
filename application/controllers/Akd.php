<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akd extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->check_last_activity();

        // Load SimpleXLSX
        require_once APPPATH . 'third_party/src/SimpleXLSX.php';
        require_once APPPATH . 'third_party/src/SimpleXLSXGen.php';
    }

    private function check_last_activity()
    {
        $last_activity = $this->session->userdata('last_activity');
        $current_time = time();

        if ($last_activity && ($current_time - $last_activity) > 1800) {
            $this->session->unset_userdata(['id', 'level']);
            redirect('login');
        }

        $this->session->set_userdata('last_activity', $current_time);
    }

    public function index()
    {
        $data['mahasiswa'] = $this->M_akd->get_all_data();
        $this->load_views('akd/v_akd', $data);
    }

    public function add_mhs()
    {
        $this->load_views('akd/add_mhs');
    }

    public function save_mhs()
    {
        if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
            $file = $_FILES['file']['tmp_name'];
            require_once APPPATH . 'third_party/src/SimpleXLSX.php';
            $xlsx = new SimpleXLSX($file);

            if ($xlsx->success()) {
                $this->process_excel($xlsx->rows());
            } else {
                $this->session->set_flashdata('error', 'Gagal membaca file Excel!');
            }
        } else {
            $this->session->set_flashdata('error', 'Gagal mengupload file!');
        }

        redirect('akd/index');
    }

    private function process_excel($rows)
    {
        $expectedHeader = ['No', 'Nama', 'Tempat Lahir', 'Tanggal Lahir', 'NIM', 'Fakultas', 'Prog_studi', 'IPK'];
        $actualHeader = array_map('trim', $rows[0] ?? []);

        if ($actualHeader !== $expectedHeader) {
            $this->session->set_flashdata('error', 'Format file Excel tidak sesuai. Harap gunakan format yang benar.');
            return;
        }

        $duplicateNims = [];
        $successCount = 0;

        foreach ($rows as $index => $row) {
            if ($index == 0) continue;

            $nim = $row[4] ?? null;
            if (empty($nim)) continue;

            if ($this->db->get_where('tbl_mhs', ['nim' => $nim])->row()) {
                $duplicateNims[] = $nim;
                continue;
            }

            $tgl_lahir = $this->convert_date($row[3] ?? null);
            $data_mhs = [
                'nim' => $nim,
                'nama' => $row[1] ?? null,
                'lok_lahir' => $row[2] ?? null,
                'tgl_lahir' => $tgl_lahir,
                'fakultas' => $row[5] ?? null,
                'prodi' => $row[6] ?? null,
                'ipk' => $row[7] ?? null
            ];

            $this->M_akd->insert_data($data_mhs);
            $successCount++;
        }

        $this->set_flashdata($successCount, $duplicateNims);
    }

    private function set_flashdata($successCount, $duplicateNims)
    {
        if ($successCount > 0) {
            $this->session->set_flashdata('success', "$successCount data berhasil diimport.");
        }

        if (!empty($duplicateNims)) {
            $this->session->set_flashdata('error', 'NIM berikut sudah ada di database: ' . implode(', ', $duplicateNims));
        }
    }

    public function lihat_data()
    {
        $data['title'] = 'Daftar Mahasiswa';
        $data['mahasiswa'] = $this->M_akd->get_all_data();
        $this->load_views('akd/v_data', $data);
    }

    public function update()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'fakultas' => $this->input->post('fakultas'),
            'prodi' => $this->input->post('prodi'),
            'ipk' => $this->input->post('ipk')
        ];

        $nim = $this->input->post('nim');
        $this->M_akd->update_mhs($nim, $data);
        $this->session->set_flashdata('update_success', true);
        redirect('akd/index');
    }

    public function delete($nim)
    {
        $this->M_akd->delete_mhs($nim);
        redirect('akd/index');
    }

    public function download()
    {
        $header = [['No', 'Nama', 'Tempat Lahir', 'Tanggal Lahir', 'NIM', 'Fakultas', 'Prog_studi', 'IPK']];
        $rows = [[1, 'John Doe', 'Semarang', '12 Januari 2004', 'A01.051.005', 'Sains dan Teknologi', 'Sistem Informasi', 3.50]];
        $data = array_merge($header, $rows);

        $xlsx = SimpleXLSXGen::fromArray($data);
        $xlsx->downloadAs('Template_Mahasiswa.xlsx');
    }

    private function load_views($view, $data = [])
    {
        $this->load->view('tpl/v_head');
        // $this->load->view('tpl/v_menu');
        $this->load->view($view, $data);
        $this->load->view('tpl/script');
    }
}
