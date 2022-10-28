<?php

defined('BASEPATH') or exit('No direct script access allowed');

class UserController extends CI_Controller
{
    public function userpage()
    {
        $this->load->view('template/header');
        $this->load->view('userpage');
        $this->load->view('template/footer');
    }
}
