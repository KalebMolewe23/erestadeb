<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer extends CI_Controller
{

    public function index()
    {

        $data['title'] = "Customer";

        $this->load->view('admin/layout/header');
        $this->load->view('customer/v_customer');
        $this->load->view('admin/layout/footer');
    }
}
