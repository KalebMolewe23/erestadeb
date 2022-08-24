<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }


    public function index()
    {
        $data_user['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $data['title'] = "Customer";

        $this->load->view('admin/layout/header', $data);
        $this->load->view('customer/v_customer', $data_user);
        $this->load->view('admin/layout/footer');
    }
}
