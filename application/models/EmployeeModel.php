<?php

class EmployeeModel extends CI_Model
{
    public function insertEmployee($data)
    {
        $this->db->insert('employees', $data);
    }
}
