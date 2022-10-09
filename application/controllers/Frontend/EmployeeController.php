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
        $this->load->library('form_validation');
        $this->form_validation->set_rules('first_name', 'First Name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required');
        $this->form_validation->set_rules('phone', 'Phone Number', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        if ($this->form_validation->run()) {
            $data = [
                'first_name' => $this->input->POST('first_name'),
                'last_name' => $this->input->POST('last_name'),
                'phone' => $this->input->POST('phone'),
                'email' => $this->input->POST('email'),
            ];
            $this->load->model('EmployeeModel');
            $this->EmployeeModel->insertEmployee($data);
            redirect(base_url('employee'));
        } else {
            $this->create();
        }

        // print_r($data);
    }
}
