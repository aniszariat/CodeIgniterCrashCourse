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
        $res = $this->EmployeeModel->listEmployee();
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
    public function getEmployeeById($id)
    {
        $this->load->model('EmployeeModel');
        $employee = $this->EmployeeModel->getEmployeeById($id);
        $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(
                json_encode($employee, JSON_NUMERIC_CHECK)
            );
    }
    public function getFields()
    {
        $this->load->model('EmployeeModel');
        $employee = $this->EmployeeModel->getFields();
        $this->output
        ->set_content_type('application/json')
        ->set_status_header(200)
        ->set_output(
            json_encode($employee, JSON_NUMERIC_CHECK)
        );
    }


    public function updateEmployee($id)
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
            $this->EmployeeModel->updateEmployee($id, $data);
            redirect(base_url('employee'));
        } else {
            $this->editEmployee($id);
        }
    }
    public function updateEmployeeById($id)
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
            $this->EmployeeModel->updateEmployee($id, $data);
            redirect(base_url('employee'));
        } else {
            $this->editEmployee($id);
        }
    }

    public function postEmployee()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('first_name', 'First Name');
        $this->form_validation->set_rules('last_name', 'Last Name');
        $this->form_validation->set_rules('phone', 'Phone Number');
        $this->form_validation->set_rules('email', 'Email');
        if ($this->form_validation->run()) {
            $data = [
                'first_name' => $this->input->POST('first_name'),
                'last_name' => $this->input->POST('last_name'),
                'phone' => $this->input->POST('phone'),
                'email' => $this->input->POST('email'),
            ];
            $this->load->model('EmployeeModel');
            $this->EmployeeModel->insertEmployee($data);
        }
        $this->output
        ->set_content_type('application/json')
        ->set_status_header(200)
        ->set_output(json_encode($data, JSON_NUMERIC_CHECK));
    }

    public function deleteEmployeeById($id)
    {
        $this->load->model('EmployeeModel');
        $this->EmployeeModel->deleteEmployee($id);
        // $this->output
        // ->set_content_type('application/json')
        // ->set_status_header(200)
        // ->set_output(json_encode('succesfully deleted !', JSON_NUMERIC_CHECK));
        redirect(base_url('employee'));
    }



    public function getDir()
    {
        var_dump(getcwd());
        var_dump(dirname(__FILE__));
        var_dump(basename(dirname(__FILE__)));
        var_dump(basename(getcwd())) ;
    }
}
