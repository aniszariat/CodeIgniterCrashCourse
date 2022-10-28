<?php

defined('BASEPATH') or exit('No direct script access allowed');

class AdminController extends CI_Controller
{
    public function adminpage()
    {
        $this->load->view('template/header');
        $this->load->view('adminpage');
        $this->load->view('template/footer');
    }
}
