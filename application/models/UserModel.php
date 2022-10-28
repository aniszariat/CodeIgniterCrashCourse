<?php

defined('BASEPATH') or exit('No direct script access allowed') ;

class UserModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('AuthenticationModel');
    }

    public function registerUser($data)
    {
        return $this->db->insert('users', $data);
    }
    public function loggedUser($data)
    {
        $this->db->select('*');
        $this->db->where('email', $data['email']);
        $this->db->where('password', $data['password']);
        $this->db->from('users');
        $this->db->limit(1);
        $q = $this->db->get();
        return $q->num_rows() ? ($q->row()) : false ;
    }
}
