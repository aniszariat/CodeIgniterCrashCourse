<?php

defined('BASEPATH') or exit('No direct script access allowed');

class StudentController extends CI_Controller
{
    public function index()
    {
        $this->load->model('StudentModel', 'st');
        // echo "student name is : " .$this->StudentModel->studentData();
        /* $student = new StudentModel();
        echo "student name is : " .$student->studentData(); */
        echo "student name is : " .$this->st->studentData();
        //! echo "student class is : " .$this->st->studentClass();
    }
}
