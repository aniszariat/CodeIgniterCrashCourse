<?php

defined('BASEPATH') or exit('No direct script access allowed');

class RegisterController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('UserModel');
    }
    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('auth/register');
        $this->load->view('template/footer');
    }
    public function getTableColumns($table)
    {
        $columns = [];
        $db_read=$this->load->database('default', true);
        $db_read->select('COLUMN_NAME');
        $db_read->from('INFORMATION_SCHEMA.COLUMNS');
        $db_read->where('TABLE_NAME', $table);
        $q=$db_read->get();
        $db_read->close();
        foreach ($q->result() as $row) {
            $columns[]=$row->COLUMN_NAME;
        }
        return $columns;
        // return array_unique($columns);
    }
    public function register()
    {
        $this->form_validation->set_rules('first_name', 'First Name', 'trim|required|alpha');
        $this->form_validation->set_rules('last_name', 'Last Nme', 'trim|required|alpha');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        // $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
        $this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required|matches[password]');

        if ($this->form_validation->run()) {
            // OK
            echo "I'm here" ;
            /* $data = $this->getTableColumns('users');
            print_r($data);
            foreach ($variable as $key => $value) {
                # code...
            } */
            $data = [
                'first_name' => $this->input->POST('first_name'),
                'last_name' => $this->input->POST('last_name'),
                'email' => $this->input->POST('email'),
                'password' => $this->input->POST('password')
            ];
            $register_user = new UserModel();
            $checking = $register_user->registerUser($data);
            if ($checking) {
                $this->session->set_flashdata('status', 'Successfully registred user!');
                redirect(base_url('employee'));
            } else {
                $this->session->set_flashdata('status', 'Failed to register this user!');
                $this->index();
            }
        } else {
            // Not OK
            $this->index();
        }
    }
}
