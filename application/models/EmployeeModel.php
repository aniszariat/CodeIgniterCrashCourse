<?php

class EmployeeModel extends CI_Model
{
    public function insertEmployee($data)
    {
        $this->db->insert('employees', $data);
    }
    public function getEmployee()
    {
        // $this->load->database('codeigniter');
        $q =$this->db->get('employees') ;
        return $q->result();
    }
}
