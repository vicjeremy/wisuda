<?php

class Forgot extends CI_Controller
{




    public function index()
    {
        $this->load->view('auth/v_forgot');
    }

    public function reset_password_request()
    {
        $email = $this->input->post('email');

        // Generate token
        $token = md5(uniqid(rand(), true));

        // Simpan token ke basis data
        $this->M_auth->save_reset_token($email, $token);

        // Kirim email
        $this->_sendEmail($token, $email);
    }

    private function _sendEmail($token, $email)
    {
        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_user' => 'matthewjova@gmail.com',
            'smtp_pass' => 'ixtqumafteoqurkf',
            'smtp_port' => 587, // Ubah port menjadi 587
            'smtp_crypto' => 'tls', // Ubah ke TLS
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
        ];

        $this->load->library('email');
        $this->email->initialize($config); // Inisialisasi konfigurasi email

        $this->email->from('matthewjova@gmail.com', 'Admin');
        $this->email->to($email);
        $this->email->subject('Reset Password');
        $this->email->message('Klik link berikut untuk mereset password Anda: ' . site_url('forgot/reset_password_form/' . $token));

        if ($this->email->send()) {
            echo 'Email berhasil dikirim';
        } else {
            echo 'Gagal mengirim email: ' . $this->email->print_debugger(); // Tampilkan pesan kesalahan
        }
    }



    public function reset_password_form($token)
    {
        $this->load->view('auth/v_reset', array('token' => $token));
    }

    public function reset_password()
    {
        $token = $this->input->post('token');
        $password = $this->input->post('password');

        // Ambil data pengguna berdasarkan token
        $user = $this->M_auth->get_user_by_token($token);

        if (!$user) {
            // Token tidak valid, tampilkan pesan kesalahan dan redirect ke halaman tertentu
            $this->session->set_flashdata('error', 'Token tidak valid');
            redirect('login');
        }

        $hashed_password = md5($password);
        $this->M_auth->update_password($user->id_akun, $hashed_password);

        $this->session->set_flashdata('success', 'Password berhasil diubah');
        redirect('login');
    }


}