<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {

    public function index(){

        $data['title'] = "Administrator";

        $this->load->view("admin/layout/header", $data);
        $this->load->view("admin/home");
        $this->load->view("admin/layout/footer");

    }

}