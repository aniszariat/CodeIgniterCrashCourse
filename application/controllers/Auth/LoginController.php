<?php

defined('BASEPATH') or exit('No direct script access allowed');

class LoginController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct() ;
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('UserModel');
    }
    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('auth/login');
        $this->load->view('template/footer');
    }
    public function login()
    {
        // $this->form_validation->set_rules('email_id', 'in_list[users.email]');
        $this->form_validation->set_rules('email_id', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run()) {
            // OK
            $data=[
                'email' => $this->input->POST('email_id'),
                'password' => $this->input->POST('password')
            ];
            $logged_uder = new UserModel();
            $result = $logged_uder->loggedUser($data);
            if ($result) {
                echo $result->first_name;
                $auth_userdetails = [
                    'first_name'=> $result->first_name,
                    'last_name'=> $result->last_name,
                    'email'=> $result->email,
                ];
                $this->session->set_userdata('authenticated', '1');
                $this->session->set_userdata('auth_user', $auth_userdetails);
                $this->session->set_flashdata('status', 'Successfully logged in');
                redirect(base_url('userpage'));
            } else {
                $this->session->set_flashdata('status', 'invalid email or password');
                redirect(base_url('login'));
                // $this->index();
            }
        } else {
            // Not OK
            $this->index();
        }
    }
}
