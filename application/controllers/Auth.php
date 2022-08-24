<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        if ($this->session->userdata('username')) { //fungsi session adalah fungsi untuk menyeleksi setiap user yang melakukan login/register
            redirect('user');
        }
        $this->form_validation->set_rules('username', 'username', 'trim|required'); //untuk validasi user yang melakukan login sesuai id yang terdaftar sesuai email
        $this->form_validation->set_rules('password', 'Password', 'trim|required'); //untuk validasi user yang melakukan login sesuai id yang terdaftar sesuai password
        if ($this->form_validation->run() == false) { //jika data salah maka akan terarah ke login/tampilan login
            $data['title'] = 'Form Login';
            $this->load->view('auth/templates/header', $data);
            $this->load->view('auth/login');
            $this->load->view('auth/templates/footer');
        } else {
            $this->_login(); //variabel jika data login benar
        }
    }

    private function _login()
    { // validasi misalkan login benar/data saat login benar
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['username' => $username])->row_array();

        if ($user) {
            if ($user['is_active'] == 1) { // 2 adalah user customer penjual ataupun pembeli
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'username' => $user['username'],
                        'idrole' => $user['idrole']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['idrole'] == 1) { //jika role id 1 yang terpanggil maka tampilan admin yang akan ditampilkan
                        redirect('administrator');
                    } else {
                        redirect('customer');
                    }
                } else { //misal data tidak sesuai ketika login maupun registrasi
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Password Salah!!! </div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Akun Tidak Aktif!!! </div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Akun Tidak Ada!!! </div>');
            redirect('auth');
        }
    }

    public function logout()
    { //fungsi untuk logout
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('idrole');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Log Out</div>');
        redirect('auth');
    }

    public function blocked()
    {
        $this->load->view('auth/block');
    }
}
