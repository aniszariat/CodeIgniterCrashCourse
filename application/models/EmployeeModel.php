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
    public function listEmployee()
    {
        // $this->load->database('codeigniter');
        $data = new stdClass();
        $empList = [];
        $q =$this->db->get('employees') ;
        $data->empolyeesNumber = $q->num_rows();
        if ($q->num_rows()) {
            foreach ($q->result() as $row) {
                $emp= new stdClass();
                $emp->first_name=$row->first_name;
                $emp->last_name=$row->last_name;
                $emp->phone=$row->phone;
                $emp->email=$row->email;
                $empList[]=$emp;
            }
        }
        $data->employeesList = $empList;
        return $data;
    }
    public function editEmployee($id)
    {
        // $this->db->where('id', $id);
        $q = $this->db->get_where('employees', ['id' => $id]);
        return $q->row();
    }
}
