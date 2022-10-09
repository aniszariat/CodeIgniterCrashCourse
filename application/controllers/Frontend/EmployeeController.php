<?php

defined('BASEPATH') or exit('No direct script access allowed');

class EmployeeController extends CI_Controller
{
    public function index()
    {
        $this->load->view('template/header');
        $this->load->model('EmployeeModel');
        $data['employees'] = $this->EmployeeModel->getEmployee();
        $this->load->view('frontend/employee', $data);
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
    }
    public function getEmployeesList()
    {
        $this->load->model('EmployeeModel');
        $res=$this->EmployeeModel->listEmployee();
        $this->output
        ->set_content_type('application/json')
        ->set_status_header(200)
        ->set_output(
            json_encode($res, JSON_NUMERIC_CHECK)
        );
    }
    public function editEmployee($id)
    {
        $this->load->model('EmployeeModel');
        $data['employee'] = $this->EmployeeModel->editEmployee($id);
        $this->load->view('template/header');
        $this->load->view('frontend/edit', $data);
        $this->load->view('template/footer');
    }
    /* public function postEmployee()
    {
        $data = new stdClass();
        // $data = [
        //     'first_name' => $first_name,
        //     'last_name' =>  $last_name,
        //     'phone' =>      $phone,
        //     'email' =>      $email,
        // ];
        $data= json_decode(file_get_contents('php://input'), true);
        // $data = json_decode($this->request->getBody());


        // $this->load->model('EmployeeModel');
        // $this->EmployeeModel->insertEmployee($data);
        $this->output
        ->set_content_type('application/json')
        ->set_status_header(200)
        ->set_output(json_encode($data, JSON_NUMERIC_CHECK));
    } */
}
