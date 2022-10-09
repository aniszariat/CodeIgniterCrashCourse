<?php

defined('BASEPATH') or exit('No direct script access allowed');

class EmployeeController extends CI_Controller
{
    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('frontend/employee');
        $this->load->view('template/footer');
    }
    public function create()
    {
        $this->load->view('template/header');
        $this->load->view('frontend/create');
        $this->load->view('template/footer');
    }
    public function store()
    {
        $data = [
            'first_name' => $this->input->POST('first_name'),
            'last_name' => $this->input->POST('last_name'),
            'phone' => $this->input->POST('phone'),
            'email' => $this->input->POST('email'),
        ];
        print_r($data);
    }
}
