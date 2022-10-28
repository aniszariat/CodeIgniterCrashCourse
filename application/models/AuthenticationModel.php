<?php

defined('BASEPATH') or exit('No direct script access allowed');

class AuthenticationModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->has_userdata('authenticated') && $this->session->userdata('authenticated')==1) {
            echo "You're a user";
        } else {
            $this->session->set_flashdata('status', 'login first');
            redirect('login');
        }
    }
}
