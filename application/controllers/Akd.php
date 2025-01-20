<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Akd extends CI_Controller{

	public function __construct() {
        parent::__construct();
        check_not_login();
        // Cek apakah pengguna sudah login dan waktu terakhir aktif
		$last_activity = $this->session->userdata('last_activity');
		$current_time = time(); // Ambil waktu saat ini
		
		// Jika waktu terakhir lebih dari 3 jam yang lalu, logout otomatis
		if ($last_activity && ($current_time - $last_activity) > 1800) {
			$this->session->unset_userdata('id');
			$this->session->unset_userdata('level');
			redirect('login');
		}

		// Perbarui waktu terakhir aktivitas jika pengguna masih aktif
		$this->session->set_userdata('last_activity', $current_time);

        // Load SimpleXLSX
		require_once APPPATH . 'third_party/src/SimpleXLSX.php';
        require_once APPPATH . 'third_party/src/SimpleXLSXGen.php'; 

    }
    
    public function index() {
        $this->load->view('tpl/v_head');
            $this->load->view('tpl/v_menu');
            $this->load->view('akd/v_akd');
    }
	public function add_mhs(){
		$this->load->view('tpl/v_head');
		$this->load->view('tpl/v_menu');
		$this->load->view('akd/add_mhs');
	}

    public function save_mhs(){
        if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
            $file = $_FILES['file']['tmp_name'];
    
            // Memuat SimpleXLSX
            require_once APPPATH . 'third_party/src/SimpleXLSX.php';
            $xlsx = new SimpleXLSX($file);
    
            if ($xlsx->success()) {
                $rows = $xlsx->rows();
    
                // Validasi format header
                $expectedHeader = [
                    'No', 'Nama', 'Tempat Lahir', 'Tanggal Lahir',
                    'NIM', 'Fakultas', 'Prog_studi', 'IPK'
                ];
                $actualHeader = array_map('trim', $rows[0] ?? []);
    
                if ($actualHeader !== $expectedHeader) {
                    $this->session->set_flashdata('error', 'Format file Excel tidak sesuai. Harap gunakan format yang benar.');
                    redirect('akd/add_mhs');
                    return;
                }
    
                $duplicateNims = []; // Array untuk menyimpan NIM yang duplikat
                $successCount = 0;
    
                // Proses data jika header valid
                foreach ($rows as $index => $row) {
                    if ($index == 0) continue; // Skip header row
    
                    $nim = $row[4] ?? null;
    
                    // Abaikan jika NIM kosong
                    if (empty($nim)) {
                        continue;
                    }
    
                    // Cek apakah NIM sudah ada di database
                    $exists = $this->db->get_where('tbl_mhs', ['nim' => $nim])->row();
    
                    if ($exists) {
                        $duplicateNims[] = $nim; // Simpan NIM yang sudah ada
                        continue; // Abaikan data ini
                    }
    
                    // Konversi tanggal lahir ke format pass (ddmmyy)
                    $tgl_lahir_raw = $row[3] ?? null;
                    $tgl_lahir = $this->convert_date($tgl_lahir_raw);
    
                    // Data untuk tbl_mhs
                    $data_mhs = array(
                        'nim'       => $nim,
                        'nama'      => $row[1] ?? null,
                        // 'nik'       => $row[2] ?? null,
                        'lok_lahir' => $row[2] ?? null,
                        'tgl_lahir' => $tgl_lahir_raw,
                        'fakultas'  => $row[5] ?? null,
                        'prodi'     => $row[6] ?? null,
                        'ipk'       => $row[7] ?? null,
                        // 'skripsi'   => $row[8] ?? null,
                        // // 'alamat'    => null,
                        // 'email'     => null,
                        // 'hp'        => null,
                        // 'size'      => null,
                        // 'ambil_toga'=> null,
                        // 'foto_almet'=> null,
                        // 'foto_keluarga' => null,
                        // 'tamu'      => null,
                        // 'sts_keu'   => null,
                        // 'sts_toga'  => null,
                    );
    
                    $this->M_akd->insert_data($data_mhs);
    
                    // Setelah konversi tanggal lahir
                    $data_akun = array(
                        'user'  => $nim,
                        'pass'  => md5($tgl_lahir), // Hasil konversi tanggal lahir ke MD5
                        'level' => 6
                    );
    
                    // Abaikan jika `pass` bernilai NULL
                    if ($tgl_lahir !== null) {
                        $this->M_akd->insert_akun($data_akun);
                    }

                    $data_toga = array(
                        'nim' => $nim
                    );
                    if ($nim !== null) {
                        $this->M_toga->insert_toga($data_toga);
                    }
                    
                    $successCount++;
                }
    
                // Buat flashdata untuk hasil import
                if ($successCount > 0) {
                    $this->session->set_flashdata('message', "$successCount data berhasil diimport!");
                }
    
                if (!empty($duplicateNims)) {
                    $this->session->set_flashdata('error', 'Data dengan NIM berikut sudah ada: ' . implode(', ', $duplicateNims));
                }
    
                redirect('akd/add_mhs');
            } else {
                $this->session->set_flashdata('error', 'Gagal membaca file Excel!');
                redirect('akd/add_mhs');
            }
        } else {
            $this->session->set_flashdata('error', 'Gagal mengupload file!');
            redirect('akd/add_mhs');
        }
    }

    
/**
 * Helper function to convert date to ddmmyy format
 */
private function convert_date($date)
{
    if (empty($date)) return null; // Jika tanggal kosong, kembalikan null
    
    $month_map = [
        'Januari' => '01', 'Februari' => '02', 'Maret' => '03',
        'April' => '04', 'Mei' => '05', 'Juni' => '06',
        'Juli' => '07', 'Agustus' => '08', 'September' => '09',
        'Oktober' => '10', 'November' => '11', 'Desember' => '12'
    ];

    $parts = explode(' ', trim($date)); // Pisahkan tanggal menjadi bagian-bagian

    // Validasi jika format tidak sesuai (pastikan ada 3 bagian)
    if (count($parts) !== 3) {
        return null; // Format salah, kembalikan null
    }

    $day = str_pad($parts[0], 2, '0', STR_PAD_LEFT); // Pastikan 2 digit
    $month = $month_map[$parts[1]] ?? null; // Cek apakah nama bulan valid
    $year = substr($parts[2], -2); // Ambil 2 digit terakhir dari tahun

    // Jika bulan tidak valid, kembalikan null
    if (!$month) {
        return null;
    }

    return $day . $month . $year;
}



	public function lihat_data()
	{
		$data['title'] = 'Daftar Mahasiswa'; // Judul halaman
		$data['mahasiswa'] = $this->M_akd->get_all_data(); // Ambil semua data mahasiswa

		// Load view dengan data mahasiswa
		$this->load->view('tpl/v_head');
		$this->load->view('tpl/v_menu');
		$this->load->view('akd/v_data', $data);
	}

	

	public function update() {
        // Load model
        $this->load->model('M_akd');

        // Retrieve form data
        $data = array(
            'nama' => $this->input->post('nama'),
            // 'lok_lahir' => $this->input->post('lok_lahir'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            // 'fakultas' => $this->input->post('fakultas'),
            // 'prodi' => $this->input->post('prodi'),
            'ipk' => $this->input->post('ipk'),
            // 'skripsi' => $this->input->post('skripsi'),
            // 'alamat' => $this->input->post('alamat'),
            // 'email' => $this->input->post('email'),
            // 'hp' => $this->input->post('hp'),
            // 'size' => $this->input->post('size'),
            // 'ambil_toga' => $this->input->post('ambil_toga'),
            // 'foto_almet' => $this->input->post('foto_almet'),
            // 'foto_keluarga' => $this->input->post('foto_keluarga'),
            // 'tamu' => $this->input->post('tamu'),
            // 'sts_keu' => $this->input->post('sts_keu'),
            // 'sts_toga' => $this->input->post('sts_toga')
        );

        // Update data in the database
        $nim = $this->input->post('nim');
        $this->M_akd->update_mhs($nim, $data);
        $this->session->set_flashdata('update_success', true);

        // Redirect to another page
        redirect('Akd/lihat_data');
    }

	public function delete($nim) {
        // Load model
        $this->load->model('M_akd');

        // Delete data from database
        $this->M_akd->delete_mhs($nim);

        // Redirect to another page
        redirect('Akd/lihat_data');
    }

    public function download()
    {
        // Header kolom template
        $header = [
            ['No', 'Nama', 'Tempat Lahir', 'Tanggal Lahir', 'NIM', 'Fakultas', 'Prog_studi', 'IPK']
        ];

        // Tambahkan satu baris kosong untuk menunjukkan format
        $rows = [
            [1, 'John Doe', 'Semarang', '12 Januari 2004', 'A01.051.005', 'Sains dan Teknologi', 'Sistem Informasi', 3.50]
        ];

        // Gabungkan header dan rows
        $data = array_merge($header, $rows);

        // Generate file Excel
        $xlsx = SimpleXLSXGen::fromArray($data);
        $filename = 'Template_Mahasiswa.xlsx';

        // Unduh file
        $xlsx->downloadAs($filename);
    }
}
