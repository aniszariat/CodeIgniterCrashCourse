<?php

class StudentModel extends CI_Model
{
    public function studentData()
    {
        return $stud_name = "Anis <br>his class ". $this->studentClass();
    }
    private function studentClass()
    {
        return $stud_class = "2éme année php";
    }
}
