<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {

    public function index(){

        $this->load->view("admin/layout/header");
        $this->load->view("admin/home");
        $this->load->view("admin/layout/footer");

    }

}